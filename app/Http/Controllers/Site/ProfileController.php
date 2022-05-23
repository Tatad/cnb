<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($user_id){
        $user = User::where('id', $user_id)->first();
        return view('site.pages.profile', ['user' => $user]);
    }
}
