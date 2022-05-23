<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CareerRequest;
use App\Services\CareerService;

class CareerController extends Controller
{
    private $service;

    /**
     * CareerService constructor.
     * @param CareerService $service
     */

    public function __construct(CareerService $service)
    {
        $this->service = $service;
    }

    /**
     * @param CareerRequest $request
     * @return int
     */
    public function createCareer(CareerRequest $request){
        return $this->service->createCareer($request);
    }

}
