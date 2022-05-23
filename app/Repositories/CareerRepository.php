<?php


namespace App\Repositories;


use App\Career;

class CareerRepository
{

    public function create(array $data)
    {
        return Career::create($data);
    }
}
