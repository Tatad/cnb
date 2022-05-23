<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Services\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService){
        $this->contactService = $contactService;
    }

    public function index(){
        $contact = Contact::first();
        return view('admin.pages.contact', ['contact' => $contact]);
    }

    public function create(Request $request){
        $this->contactService->create($request);
        return redirect('/admin/contacts');
    }

    public function update(Request $request){
        $contact = Contact::first();
        $this->contactService->update($request, $contact);
        return redirect('/admin/contacts');
    }
}
