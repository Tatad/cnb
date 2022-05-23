<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditProfileRequest;
use App\Services\EditProfileService;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
{
    /**
     * @var EditProfileService
     */
    private $service;

    /**
     * ConcertController constructor.
     * @param EditProfileService $service
     */
    public function __construct(EditProfileService $service)
    {
        $this->service = $service;
    }

    public function viewProfile(){
        return view('auth.editProfile');
    }

    public function updateProfile(EditProfileRequest $request){
        $user = Auth::guard('admin')->user();
        $this->service->update($request, $user);
        return redirect('/admin/profile');
    }
}
