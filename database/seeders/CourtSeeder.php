<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courts')->insert([
            [
                'court_id'   => 'a1b2c3d4-e5f6-789a-bcde-f1a2b3c4d5e6',
                'field_id'   => '1a2b3c4d-5e6f-7a8b-9c0d-1e2f3a4b5c6d',
                'court_name' => 'Court 1',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'b2c3d4e5-f6a7-89bc-def0-1a2b3c4d5e6r',
                'field_id'   => '1a2b3c4d-5e6f-7a8b-9c0d-1e2f3a4b5c6d',
                'court_name' => 'Court 2',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'c3d4e5f6-a789-bcde-f012-3a4b5c6d7e8a',
                'field_id'   => '1a2b3c4d-5e6f-7a8b-9c0d-1e2f3a4b5c6d',
                'court_name' => 'Court 3',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'court_id'   => 'd4e5f6a7-89bc-def0-1234-5c6d7e8f9a0b',
                'field_id'   => '2b3c4d5e-6f7a-8b9c-0d1e-2f3a4b5c6d7e',
                'court_name' => 'Court 1',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'e5f6a789-bcde-f012-3456-7e8f9a0b1c2d',
                'field_id'   => '2b3c4d5e-6f7a-8b9c-0d1e-2f3a4b5c6d7e',
                'court_name' => 'Court 2',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'f6a789bc-def0-1234-5678-9a0b1c2d3e4f',
                'field_id'   => '2b3c4d5e-6f7a-8b9c-0d1e-2f3a4b5c6d7e',
                'court_name' => 'Court 3',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'court_id'   => 'a789bcde-f012-3456-789a-b1c2d3e4f5a6',
                'field_id'   => '3c4d5e6f-7a8b-9c0d-1e2f-3a4b5c6d7e8f',
                'court_name' => 'Court A',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'bcdef012-3456-789a-bcde-1c2d3e4f5a6b',
                'field_id'   => '3c4d5e6f-7a8b-9c0d-1e2f-3a4b5c6d7e8f',
                'court_name' => 'Court B',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'cdef0123-4567-89ab-cdef-2d3e4f5a6b7c',
                'field_id'   => '3c4d5e6f-7a8b-9c0d-1e2f-3a4b5c6d7e8f',
                'court_name' => 'Court C',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'court_id'   => 'def01234-5678-9abc-def0-3e4f5a6b7c8d',
                'field_id'   => '3c4d5e6f-7a8b-9c0d-1e2f-3a4b5c6d7e8g',
                'court_name' => 'Court A',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'ef012345-6789-abcd-ef01-4f5a6b7c8d9e',
                'field_id'   => '3c4d5e6f-7a8b-9c0d-1e2f-3a4b5c6d7e8g',
                'court_name' => 'Court B',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'f0123456-789a-bcde-f012-5a6b7c8d9e0f',
                'field_id'   => '3c4d5e6f-7a8b-9c0d-1e2f-3a4b5c6d7e8g',
                'court_name' => 'Court C',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'court_id'   => '01234567-89ab-cdef-0123-6b7c8d9e0f1a',
                'field_id'   => '3c4d5e6f-7a8b-9c0d-1e2f-3a4b5c6d7e8h',
                'court_name' => 'Court A',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '12345678-9abc-def0-1234-7c8d9e0f1a2b',
                'field_id'   => '3c4d5e6f-7a8b-9c0d-1e2f-3a4b5c6d7e8h',
                'court_name' => 'Court B',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '23456789-abcd-ef01-2345-8d9e0f1a2b3c',
                'field_id'   => '3c4d5e6f-7a8b-9c0d-1e2f-3a4b5c6d7e8h',
                'court_name' => 'Court C',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'court_id'   => '3456789a-bcde-f012-3456-9e0f1a2b3c4d',
                'field_id'   => '4d5e6f7a-8b9c-0d1e-2f3a-4b5c6d7e8f9a',
                'court_name' => 'Court 1',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '456789ab-cdef-0123-4567-0f1a2b3c4d5e',
                'field_id'   => '4d5e6f7a-8b9c-0d1e-2f3a-4b5c6d7e8f9a',
                'court_name' => 'Court 2',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '56789abc-def0-1234-5678-1a2b3c4d5e6f',
                'field_id'   => '4d5e6f7a-8b9c-0d1e-2f3a-4b5c6d7e8f9a',
                'court_name' => 'Court 3',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '6789abcd-ef01-2345-6789-2b3c4d5e6f7a',
                'field_id'   => '4d5e6f7a-8b9c-0d1e-2f3a-4b5c6d7e8f9a',
                'court_name' => 'Court 4',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'court_id'   => '789abcde-f012-3456-789a-3c4d5e6f7a8b',
                'field_id'   => '5e6f7a8b-9c0d-1e2f-3a4b-5c6d7e8f9a0b',
                'court_name' => 'Court 1',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '89abcdef-0123-4567-89ab-4d5e6f7a8b9c',
                'field_id'   => '5e6f7a8b-9c0d-1e2f-3a4b-5c6d7e8f9a0b',
                'court_name' => 'Court 2',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '9abcdef0-1234-5678-9abc-5e6f7a8b9c0d',
                'field_id'   => '5e6f7a8b-9c0d-1e2f-3a4b-5c6d7e8f9a0b',
                'court_name' => 'Court 3',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'abcdef01-2345-6789-abcd-6f7a8b9c0d1e',
                'field_id'   => '5e6f7a8b-9c0d-1e2f-3a4b-5c6d7e8f9a0b',
                'court_name' => 'Court 4',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'court_id'   => 'bcdef012-3456-789a-bcde-7a8b9c0d1e2f',
                'field_id'   => '6f7a8b9c-0d1e-2f3a-4b5c-6d7e8f9a0b1c',
                'court_name' => 'Court A',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'cdef0123-4567-89ab-cdef-8b9c0d1e2f3a',
                'field_id'   => '6f7a8b9c-0d1e-2f3a-4b5c-6d7e8f9a0b1c',
                'court_name' => 'Court B',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'def01234-5678-9abc-def0-9c0d1e2f3a4b',
                'field_id'   => '6f7a8b9c-0d1e-2f3a-4b5c-6d7e8f9a0b1c',
                'court_name' => 'Court C',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'court_id'   => 'ef012345-6789-abcd-ef01-0d1e2f3a4b5c',
                'field_id'   => '7a8b9c0d-1e2f-3a4b-5c6d-7e8f9a0b1c2d',
                'court_name' => 'Court 1',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'f0123456-789a-bcde-f012-1e2f3a4b5c6d',
                'field_id'   => '7a8b9c0d-1e2f-3a4b-5c6d-7e8f9a0b1c2d',
                'court_name' => 'Court 2',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '01234567-89ab-cdef-0123-2f3a4b5c6d7e',
                'field_id'   => '7a8b9c0d-1e2f-3a4b-5c6d-7e8f9a0b1c2d',
                'court_name' => 'Court 3',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'court_id'   => '12345678-9abc-def0-1234-3a4b5c6d7e8f',
                'field_id'   => '8b9c0d1e-2f3a-4b5c-6d7e-8f9a0b1c2d3e',
                'court_name' => 'Court A',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '23456789-abcd-ef01-2345-4b5c6d7e8f9a',
                'field_id'   => '8b9c0d1e-2f3a-4b5c-6d7e-8f9a0b1c2d3e',
                'court_name' => 'Court B',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '3456789a-bcde-f012-3456-5c6d7e8f9a0b',
                'field_id'   => '8b9c0d1e-2f3a-4b5c-6d7e-8f9a0b1c2d3e',
                'court_name' => 'Court C',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'court_id'   => '456789ab-cdef-0123-4567-6d7e8f9a0b1c',
                'field_id'   => '9c0d1e2f-3a4b-5c6d-7e8f-9a0b1c2d3e4f',
                'court_name' => 'Court A',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '56789abc-def0-1234-5678-7e8f9a0b1c2d',
                'field_id'   => '9c0d1e2f-3a4b-5c6d-7e8f-9a0b1c2d3e4f',
                'court_name' => 'Court B',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '6789abcd-ef01-2345-6789-8f9a0b1c2d3e',
                'field_id'   => '9c0d1e2f-3a4b-5c6d-7e8f-9a0b1c2d3e4f',
                'court_name' => 'Court C',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '789abcde-f012-3456-789a-9a0b1c2d3e4f',
                'field_id'   => '0d1e2f3a-4b5c-6d7e-8f9a-0b1c2d3e4f5a',
                'court_name' => 'Court 1',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '89abcdef-0123-4567-89ab-0b1c2d3e4f5a',
                'field_id'   => '0d1e2f3a-4b5c-6d7e-8f9a-0b1c2d3e4f5a',
                'court_name' => 'Court 2',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '9abcdef0-1234-5678-9abc-1c2d3e4f5a6b',
                'field_id'   => '0d1e2f3a-4b5c-6d7e-8f9a-0b1c2d3e4f5a',
                'court_name' => 'Court 3',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'abcdef01-2345-6789-abcd-2d3e4f5a6b7c',
                'field_id'   => '0d1e2f3a-4b5c-6d7e-8f9a-0b1c2d3e4f5b',
                'court_name' => 'Court A',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'bcdef012-3456-789a-bcde-3e4f5a6b7c8d',
                'field_id'   => '0d1e2f3a-4b5c-6d7e-8f9a-0b1c2d3e4f5b',
                'court_name' => 'Court B',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'cdef0123-4567-89ab-cdef-4f5a6b7c8d9e',
                'field_id'   => '0d1e2f3a-4b5c-6d7e-8f9a-0b1c2d3e4f5b',
                'court_name' => 'Court C',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'def01234-5678-9abc-def0-5a6b7c8d9e0f',
                'field_id'   => '1e2f3a4b-5c6d-7e8f-9a0b-1c2d3e4f5a6b',
                'court_name' => 'Court A',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'ef012345-6789-abcd-ef01-6b7c8d9e0f1a',
                'field_id'   => '1e2f3a4b-5c6d-7e8f-9a0b-1c2d3e4f5a6b',
                'court_name' => 'Court B',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'f0123456-789a-bcde-f012-7c8d9e0f1a2b',
                'field_id'   => '1e2f3a4b-5c6d-7e8f-9a0b-1c2d3e4f5a6b',
                'court_name' => 'Court C',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'court_id'   => 'a1b2c3d4-e5f6-789a-bcde-0f1a2b3c4d5e',
                'field_id'   => '2f3a4b5c-6d7e-8f9a-0b1c-2d3e4f5a6b7c',
                'court_name' => 'Iron Man',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'b2c3d4e5-f6a7-89bc-def0-1a2b3c4d5e6f',
                'field_id'   => '2f3a4b5c-6d7e-8f9a-0b1c-2d3e4f5a6b7c',
                'court_name' => 'Thor',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'c3d4e5f6-a789-bcde-f012-2b3c4d5e6f7a',
                'field_id'   => '2f3a4b5c-6d7e-8f9a-0b1c-2d3e4f5a6b7c',
                'court_name' => 'Hulk',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'd4e5f6a7-89bc-def0-1234-3c4d5e6f7a8b',
                'field_id'   => '2f3a4b5c-6d7e-8f9a-0b1c-2d3e4f5a6b7c',
                'court_name' => 'Black Widow',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'court_id'   => '01234567-89ab-cdef-0123-8d9e0f1a2b3c',
                'field_id'   => '3a4b5c6d-7e8f-9a0b-1c2d-3e4f5a6b7c8d',
                'court_name' => 'Iron Man',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '12345678-9abc-def0-1234-9e0f1a2b3c4d',
                'field_id'   => '3a4b5c6d-7e8f-9a0b-1c2d-3e4f5a6b7c8d',
                'court_name' => 'Thor',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '23456789-abcd-ef01-2345-0f1a2b3c4d5e',
                'field_id'   => '3a4b5c6d-7e8f-9a0b-1c2d-3e4f5a6b7c8d',
                'court_name' => 'Hulk',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '3456789a-bcde-f012-3456-1a2b3c4d5e6f',
                'field_id'   => '3a4b5c6d-7e8f-9a0b-1c2d-3e4f5a6b7c8d',
                'court_name' => 'Black Widow',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'court_id'   => '789abcde-f012-3456-789a-5e6f7a8b9c0d',
                'field_id'   => '4b5c6d7e-8f9a-0b1c-2d3e-4f5a6b7c8d9e',
                'court_name' => 'Court A',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '89abcdef-0123-4567-89ab-6f7a8b9c0d1e',
                'field_id'   => '4b5c6d7e-8f9a-0b1c-2d3e-4f5a6b7c8d9e',
                'court_name' => 'Court B',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => '9abcdef0-1234-5678-9abc-7a8b9c0d1e2f',
                'field_id'   => '4b5c6d7e-8f9a-0b1c-2d3e-4f5a6b7c8d9e',
                'court_name' => 'Court C',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'court_id'   => 'abcdef01-2345-6789-abcd-8b9c0d1e2f3a',
                'field_id'   => '5c6d7e8f-9a0b-1c2d-3e4f-5a6b7c8d9e0f',
                'court_name' => 'Court A',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'bcdef012-3456-789a-bcde-9c0d1e2f3a4b',
                'field_id'   => '5c6d7e8f-9a0b-1c2d-3e4f-5a6b7c8d9e0f',
                'court_name' => 'Court B',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'court_id'   => 'cdef0123-4567-89ab-cdef-0d1e2f3a4b5c',
                'field_id'   => '5c6d7e8f-9a0b-1c2d-3e4f-5a6b7c8d9e0f',
                'court_name' => 'Court C',
                'is_active'  => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
