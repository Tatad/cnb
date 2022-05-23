<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use App\Services\GalleryService;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class GalleryController extends Controller
{
    /**
     * @var GalleryService
     */
    protected $galleryService;

    /**
     * GalleryController constructor.
     * @param GalleryService $galleryService
     */
    public function __construct(GalleryService $galleryService)
    {
        $this->galleryService = $galleryService;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('admin.pages.galleries');
    }

    /**
     * @return Application|Factory|View
     */
    public function createView()
    {
        return view('admin.pages.gallery_inner');
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function create(Request $request)
    {
        $this->galleryService->create($request);
        return redirect('admin/galleries');
    }

    /**
     * @param Request $request
     * @return array
     */
    public function getList(Request $request){
        return $this->galleryService->getList($request);
    }

    /**
     * @param Gallery $gallery
     * @return Application|Factory|View
     */
    public function editView(Gallery $gallery){
        return view('admin.pages.gallery_inner', ['gallery' => $gallery]);
    }

    /**
     * @param Request $request
     * @param Gallery $gallery
     * @return Application|RedirectResponse|Redirector
     */
    public function edit(Request $request, Gallery $gallery){
        $this->galleryService->edit($request, $gallery);
        return redirect('/admin/galleries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Gallery $gallery
     * @return bool
     * @throws Exception
     */
    public function destroy(Gallery $gallery): bool
    {
        return $gallery->delete();
    }
}
