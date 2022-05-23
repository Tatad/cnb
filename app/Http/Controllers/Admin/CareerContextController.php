<?php

namespace App\Http\Controllers\Admin;

use App\Career_context;
use App\Http\Controllers\Controller;
use App\Services\CareerContextService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class CareerContextController extends Controller
{
    /**
     * @var CareerContextService
     */
    protected $careerContextService;

    /**
     * CareerContextController constructor.
     * @param CareerContextService $careerContextService
     */
    public function __construct(CareerContextService $careerContextService)
    {
        $this->careerContextService = $careerContextService;
    }

    public function index(){
        $career = Career_context::first();
        return view('admin.pages.career_context', ['career' => $career]);
    }


    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function create(Request $request){
        $this->careerContextService->create($request);
        return redirect('/admin/careers');
    }

    public function update(Request $request){
        $career = Career_context::first();
        $this->careerContextService->update($request, $career);
        return redirect('/admin/careers');
    }

}
