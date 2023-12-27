<?php

namespace App\Repositories;

use App\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all(array $filters = [], array $order = [])
    {
        $query = $this->model->newModelQuery();
        dd($query->get());
    }

    public function store(array $data = [])
    {

    }

    public function get($id)
    {

    }

    public function update($id, array $data = [])
    {

    }

    public function delete($id)
    {

    }
}
