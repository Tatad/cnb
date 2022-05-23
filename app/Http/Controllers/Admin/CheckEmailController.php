<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class CheckEmailController extends Controller
{
    public function check(Request $request){
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if($user){
            return 'false';
        }
        return 'true';
    }
}
