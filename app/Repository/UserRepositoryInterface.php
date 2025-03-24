<?php

namespace App\Repository;

interface UserRepositoryInterface
{
    public function index();
    public function getById($id);
    public function getByEmail($email);
    public function store(array $data);
    public function update(array $data,$id);
    public function delete($id);
}
