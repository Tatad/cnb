<?php

namespace App\Http\Controllers\Site;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contactData = Contact::first();
        return view('site.pages.contact', ['data' => $contactData]);
    }
}
