<?php


namespace App\Repositories;


use App\Banner;

class BannerRepository
{

    public function create(array $data)
    {
        return Banner::create($data);
    }

    public function update(array $data, $banner)
    {
        return $banner->update($data);
    }
}
