<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    public function index(){
        return view('site.pages.gallery');
    }

    public function getData(){
        return Gallery::all();
    }
}
