<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\JsonRpcClientSimplyBook\JsonRpcClient;
use App\Http\Controllers\Controller;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;
use GuzzleHttp\Client;


class SimplyBookController extends Controller
{


    /**
     * Getting the token-key.
     *
     * @return array|Application|ResponseFactory|Response
     */
    public function getToken(){
        $getToken = new JsonRpcClient('https://user-api.simplybook.me/login');
        return $getToken->getToken(config('app.company_login'), config('app.api_key'));
    }

    /**
     *
     * Create new client and return it.
     * Throws AccessDenied error in case user does not have access to perform this action.
     * Throws BadRequest error in case invalid data was provided with detailed errors per field.
     * Throws NotFound error in case client is not found.
     *
     * @param $user_data
     * @return array|Application|ResponseFactory|Response
     */
    public function addClient($user_data)
    {
        $token = $this->getToken();
        $client = new JsonRpcClient( 'https://user-api.simplybook.me',
            [
                'headers' => [
                    'X-Company-Login: ' . config('app.company_login'),
                    'X-Token: ' . $token
                ]
            ]
        );
        $clientData = [
            'name' => $user_data['name'] . ' ' . $user_data['surname'],
            'email' => $user_data['email'],
            'phone' => $user_data['mobile'],
            'address1' => $user_data['address'],
            'password' => $user_data['password'],
        ];
        try {
            return array($client->addClient($clientData));
        }
        catch (Exception $e){
            return response($e->getMessage());
        }
    }

//    public function userLogin(){
//        $token = $this->getToken();
//        $client = new JsonRpcClient( 'https://user-api.simplybook.me/admin',
//            [
//                'headers' => [
//                    'X-Company-Login: ' . config('app.company_login'),
//                    'X-Token: ' . $token
//                ]
//            ]
//        );
//        $clientData = [
//            'id' => 'hambardd67dzums@codics.am',
//            'password' => '90c1c99a95e10322e20aa69e7d083742'
//        ];
////        return json_decode(json_encode($clientData), false)->hash;
//        try {
//            return array($client->getClient(7));
//        }
//        catch (Exception $e){
//            return $e->getMessage();
//        }
//
//    }

    public function getServiceUrl(){
        $getServiceUrl = new JsonRpcClient('https://user-api.simplybook.me/login', 'POST');
        return $getServiceUrl->getServiceUrl(config('app.company_login'));
    }
}
