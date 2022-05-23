<?php


namespace App\Services;


use App\Http\Requests\EditProfileRequest;
use App\Repositories\EditProfileRepository;
use App\User;
use Illuminate\Support\Facades\Hash;

class EditProfileService
{
    /**
     * @var EditProfileRepository
     */
    private $repo;

    /**
     * AnalyticsService constructor.
     *
     * @param EditProfileRepository $repo
     */
    public function __construct(EditProfileRepository $repo)
    {
        $this->repo = $repo;
    }

    public function update(EditProfileRequest $request, $user)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        return $this->repo->updateProfile($data, $user);
    }
}
