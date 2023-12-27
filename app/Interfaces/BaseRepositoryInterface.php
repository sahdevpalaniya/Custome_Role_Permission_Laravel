<?php

namespace App\Interfaces;

interface BaseRepositoryInterface
{
    public function all(array $filters = [], array $order = []);

    public function store(array $data = []);

    public function get($id);

    public function update($id, array $data = []);

    public function delete($id);
}
