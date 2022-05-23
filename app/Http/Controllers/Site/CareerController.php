<?php

namespace App\Http\Controllers\Site;

use App\Career_context;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(){
        $data = Career_context::first();
        return view('site.pages.career', ['data' => $data]);
    }
}
