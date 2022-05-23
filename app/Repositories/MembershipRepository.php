<?php


namespace App\Repositories;


use App\Membership;

class MembershipRepository
{

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return Membership::create($data);
    }

    /**
     * @param array $data
     * @param $membership
     * @return mixed
     */
    public function update(array $data, $membership)
    {
        return $membership->update($data);
    }
}
