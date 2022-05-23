<?php


namespace App\Services;


use App\Repositories\MembershipRepository;
use Illuminate\Http\Request;

class MembershipService
{
    /**
     * @var MembershipRepository
     */
    protected $membershipRepository;

    /**
     * MembershipService constructor.
     * @param MembershipRepository $membershipRepository
     */
    public function __construct(MembershipRepository $membershipRepository)
    {
        $this->membershipRepository = $membershipRepository;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $data = $request->all();
        if(isset($data['membership_banner_image'])){
            $data['membership_banner_image'] = getFile($data['membership_banner_image']);
        }
        return $this->membershipRepository->create($data);
    }

    /**
     * @param Request $request
     * @param $membership
     * @return mixed
     */
    public function update(Request $request, $membership)
    {
        $data = $request->all();
        if(isset($data['membership_banner_image'])){
            $data['membership_banner_image'] = getFile($data['membership_banner_image']);
        }
        return $this->membershipRepository->update($data, $membership);
    }
}
