<?php

namespace App\Repository\Impl;

use App\Models\Venue;
use App\Models\VenuePayment;
use App\Repository\IVenuePaymentRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class VenuePaymentRepository implements IVenuePaymentRepository
{
    public function store(array $data): VenuePayment{
        return VenuePayment::create($data);
    }

    public function findByVenueId(string $venueId): VenuePayment{
        return VenuePayment::where('venue_id', $venueId)->first();
    }

    public function existsPaidThisMonth(string $venueId): bool
    {
        return VenuePayment::where('venue_id', $venueId)
            ->where('status', 'paid')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->exists();
    }

    /**
     * Lấy danh sách các sân (venue) thuộc owner có ID tương ứng,
     * có trạng thái 'active' và chưa được thanh toán trong tháng hiện tại.
     *
     * @param string|null $ownerId
     * @return Collection|Venue[]
     */
    public function getAllVenueByOwnerId(?string $ownerId = null): Collection|array
    {

        $now = Carbon::now();
        $startOfMonth = $now->copy()->startOfMonth();
        $endOfMonth = $now->copy()->endOfMonth();
        $query = Venue::query();

        if ($ownerId) {
            $query->where('owner_id', $ownerId);
        }

        $query->where('status', 'active')
            ->whereNotExists(function ($q) use ($startOfMonth, $endOfMonth) {
                $q->select(DB::raw(1))
                    ->from('venue_payment')
                    ->whereColumn('venue_payment.venue_id', 'venues.venue_id')
                    ->where('venue_payment.status', 'paid')
                    ->whereBetween('venue_payment.created_at', [$startOfMonth, $endOfMonth]);
            });

        return $query->get();
    }

    public function getTotalRevenue(): array
    {
        $currentMonth = Carbon::now();
        $startDate = Carbon::now()->subMonths(2)->startOfMonth();
        $endDate = $currentMonth->endOfMonth();

        $totalsByMonth = VenuePayment::select(
            DB::raw("DATE_FORMAT(created_at, '%Y-%m') as month"),
            DB::raw('SUM(amount) as total_amount')
        )
            ->where('status', 'paid')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get()
            ->mapWithKeys(function ($item) {
                return [$item->month => $item->total_amount];
            });

        $months = [
            $startDate->format('Y-m'),
            $startDate->copy()->addMonth()->format('Y-m'),
            $currentMonth->format('Y-m'),
        ];
        return collect($months)->mapWithKeys(function ($month) use ($totalsByMonth) {
            return [$month => $totalsByMonth->get($month, 0)];
        })->all();
    }
}
