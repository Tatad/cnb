<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Support\Renderable;

class ServicesController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('pages.services');
    }
}
