<?php


namespace App\Repositories;


use App\Service;

class ServiceRepository
{
    /**
     * @param array $data
     * @return
     */
    public function create(array $data)
    {
        return Service::create($data);
    }

    /**
     * @param array $data
     * @param $service
     * @return mixed
     */
    public function update(array $data, $service)
    {
        return $service->update($data);
    }
}
