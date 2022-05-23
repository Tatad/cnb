<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Exception;

class ProfileController extends Controller
{
    public function update(User $user, Request $request){
        try
        {
            $user->update($request->all());
            return redirect('/profile/'.$user['id']);
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }
}
