<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $data = Service::first();
        return view('site.pages.services', ['data' => $data]);
    }
}
