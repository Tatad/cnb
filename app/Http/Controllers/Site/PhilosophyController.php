<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Philosophy;
use Illuminate\Http\Request;

class PhilosophyController extends Controller
{
    public function index(){
        $data = Philosophy::first();
        return view('site.pages.philosophy', ['data' => $data]);
    }
}
