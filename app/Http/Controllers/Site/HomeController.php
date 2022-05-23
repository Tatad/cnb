<?php

namespace App\Http\Controllers\Site;

use App\Banner;
use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $banner = Banner::first();
        $contactData = Contact::first();
        return view('site.pages.home', ['data' => $banner, 'contactData' => $contactData]);
    }
}
