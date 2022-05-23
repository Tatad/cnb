<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Admin\SimplyBookController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
use App\Services\PaymentService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    protected $registerController;
    protected $paymentService;
    protected $login;
    protected $simplyBookController;

    /**
     * Create a new controller instance.
     * @param RegisterController $registerController
     * @param PaymentService $paymentService
     * @param LoginController $login
     * @param SimplyBookController $simplyBookController
     */
    public function __construct(RegisterController $registerController, PaymentService $paymentService, LoginController $login, SimplyBookController $simplyBookController)
    {
        $this->registerController = $registerController;
        $this->paymentService = $paymentService;
        $this->login = $login;
        $this->simplyBookController = $simplyBookController;
    }


    /**
     * @param Request $request
     * @return array
     */
    public function createPayment(Request $request){
        try {
            $this->simplyBookController->addClient($request->all());
            $user_data = $this->registerController->create($request->all());
            $this->login->login($request);
        } catch (Exception $e) {
            return $e->getMessage();
        }
//        $result = $this->paymentService->createOrder($user_data);
//        $price = $this->paymentService->getMembershipTypeAmount($user_data['membership']);
        return [
//            'url' => /*trim($result['order']['url'])*/ '',
            'date' => date("Y-m-d"),
            'email' => $user_data['email'],
//            'membership' => $user_data['membership'],
//            'price' => $price,
            'user_id' => $user_data['id']
        ];
    }

    public function loginUser(Request $request){
        $this->login->login($request);
        if(Auth::check()){
            return Auth::user()->id;
        }
        return 0;
    }

}
