<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Membership;
use App\Services\MembershipService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class MembershipController extends Controller
{
    /**
     * @var MembershipService
     */
    protected $membershipService;

    /**
     * MembershipController constructor.
     * @param MembershipService $membershipService
     */
    public function __construct(MembershipService $membershipService)
    {
        $this->membershipService = $membershipService;
    }

    public function index()
    {
        $membership = Membership::first();
        return view('admin.pages.membership', ['membership' => $membership]);
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function create(Request $request)
    {
        $this->membershipService->create($request);
        return redirect('/admin/memberships');
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request){
        $membership = Membership::first();
        $this->membershipService->update($request, $membership);
        return redirect('/admin/memberships');
    }
}
