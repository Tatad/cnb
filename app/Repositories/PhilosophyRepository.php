<?php


namespace App\Repositories;


use App\Philosophy;

class PhilosophyRepository
{

    public function create(array $data)
    {
        return Philosophy::create($data);
    }

    public function update(array $data, $philosophy)
    {
        return $philosophy->update($data);
    }
}
