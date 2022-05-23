<?php


namespace App\Repositories;


class EditProfileRepository
{
    public function updateProfile(array $data, $user)
    {
        return $user->update($data);
    }
}
