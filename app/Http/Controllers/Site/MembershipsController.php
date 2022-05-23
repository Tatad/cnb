<?php

namespace App\Http\Controllers\Site;

use App\Contact;
use App\Membership;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembershipsController extends Controller
{
    public function index(){
         $data = Membership::first();
         $contactData = Contact::first();
         return view('site.pages.memberships', ['data' => $data, 'contactData' => $contactData]);
    }
}
