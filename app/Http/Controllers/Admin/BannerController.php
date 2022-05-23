<?php

namespace App\Http\Controllers\Admin;

use App\Banner;
use App\Http\Controllers\Controller;
use App\Services\BannerService;
use App\Test;
use App\Token;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class BannerController extends Controller
{
    /**
     * @var BannerService
     */
    protected $bannerService;

    /**
     * BannerController constructor.
     * @param BannerService $bannerService
     */
    public function __construct(BannerService $bannerService)
    {
        $this->bannerService = $bannerService;
    }

    /**
     * @return Application|Factory|View
     */
    public function index(){
        $banner = Banner::first();

        return view('admin.pages.banner', ['banner' => $banner]);
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function create(Request $request){
        $this->bannerService->create($request);
        return redirect('/admin/banners');
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request){
        $banner = Banner::first();
        $this->bannerService->update($request, $banner);
        return redirect('/admin/banners');
    }

    public function addLog(Request $request){
        return Test::create([
           'logs' => $request->all()
        ]);
    }
}
