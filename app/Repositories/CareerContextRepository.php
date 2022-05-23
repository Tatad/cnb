<?php


namespace App\Repositories;


use App\Career_context;

class CareerContextRepository
{

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return Career_context::create($data);
    }

    /**
     * @param array $data
     * @param $career
     * @return mixed
     */
    public function update(array $data, $career)
    {
        return $career->update($data);
    }
}
