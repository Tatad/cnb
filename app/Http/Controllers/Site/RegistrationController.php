<?php

namespace App\Http\Controllers\Site;

use App\Call_Back;
use App\Http\Controllers\Controller;
use App\Token;

class RegistrationController extends Controller
{
    public function index($token, $call_back_id)
    {
        Call_Back::where('id', '=', $call_back_id)->update([
            'status' => 1
        ]);
        $token_ = Token::where('token', '=', $token)->where('call_back_id', '=', $call_back_id)->where('user_id', '=', null)->first();
        if(!isset($token_)){
            return abort(404);
        }
        $user = Call_Back::where('id', '=', $call_back_id)->first();
        $userData = [
            'name' => $user['name'] ?? '',
            'phone' => $user['phone'] ?? '',
            'email' => $user['email'] ?? ''
        ];
        $regData = [
            [
                'title' => 'Account setup',
                'desc' => '',
                'image' => '/site/media/images/banners/registrationBanner.png',
                'nextBlock' => 'General info',
//                'bannerInfoVisible' => true,
                'showPrevButton' => false,
                'blockKey' => 'accountSetup'
            ],
            [
                'title' => 'General info',
                'desc' => '',
                'image' => '/site/media/images/registration/generalInfo.jpeg',
                'nextBlock' => 'Contact info',
                'showPrevButton' => true,
                'blockKey' => 'generalInfo'
            ],
            [
                'title' => 'Contact info',
                'desc' => '',
                'image' => '/site/media/images/registration/contactInfo.png',
                'nextBlock' => '',
                'showPrevButton' => true,
                'blockKey' => 'contactInfo'
            ],
//            [
//                'title' => 'Card details',
//                'desc' => '',
//                'image' => 'site/media/images/registration/cardDetails.png',
//                'nextBlock' => '',
//                'showPrevButton' => true,
//                'blockKey' => 'cardDetails'
//            ]
        ];


        return view('site.pages.registration', ['data' => $regData, 'user' => $userData, 'token' => $token_['token'], 'call_back_id' => $call_back_id]);
    }
}


/*public function check_url($token, $call_back_id){
    Call_Back::where('id', $call_back_id)->update([
        'status' => 1
    ]);
    $token = Token::where('token', '=', $token)->where('call_back_id', '=', $call_back_id)->where('user_id', '=', null)->first();
    if(!isset($token)){
        return redirect('/home');
    }
    else{

    }
}*/
