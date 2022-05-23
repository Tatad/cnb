<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Philosophy;
use App\Services\PhilosophyService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class PhilosophyController extends Controller
{
    /**
     * @var $philosophyService
     */
    protected $philosophyService;

    /**
     * BannerController constructor.
     * @param PhilosophyService $philosophyService
     */
    public function __construct(PhilosophyService $philosophyService)
    {
        $this->philosophyService = $philosophyService;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $philosophy = Philosophy::first();
        return view('admin.pages.philosophy', ['philosophy' => $philosophy]);
    }


    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function create(Request $request)
    {
        $this->philosophyService->create($request);
        return redirect('/admin/philosophies');
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request)
    {
        $philosophy = Philosophy::first();
        $this->philosophyService->update($request, $philosophy);
        return redirect('/admin/philosophies');
    }
}
