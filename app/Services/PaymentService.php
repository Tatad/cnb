<?php


namespace App\Services;


use App\Log;
use App\Order;
use Exception;

class PaymentService
{
    public function createOrder($user_data){
        /*Create New Order In Orders Table*/
        $order = $this->createNewOrder($user_data);
        $this->addLog($order, $user_data['id ']);
        return $this->createPayment($order, $user_data);

    }


    private function createNewOrder($user_data)
    {
        return Order::create([
            'user_id' => $user_data['id'],
            'details' => $user_data
        ]);
    }

    private function createPayment($order, $details)
    {
        $log = [
            'log' => $order,
            'action' => config('app.payment_url'),
        ];
        $this->addLog($log, $details['id']);
        $params = array(
            'ivp_method' => 'create',
            'ivp_store' => config('app.storeID'),
            'ivp_authkey' => config('app.authenticationKey'),
            'ivp_amount' => $this->getMembershipTypeAmount($details['membership']),
            'ivp_currency' => config('app.currency'),
            'ivp_test' => '1',
            'ivp_cart' => $order['id'],
            'ivp_desc' => config('app.description'),
            'return_auth' => config('app.authorised_url'),
            'return_decl' => config('app.declined_url'),
            'return_can' => config('app.cancelled_url'),
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, config('app.payment_url'));
        curl_setopt($ch, CURLOPT_POST, count($params));
        curl_setopt($ch, CURLOPT_POSTFIELDS,$params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
        $results = curl_exec($ch);
        curl_close($ch);
        $results = json_decode($results,true);
        $log = [
            'order' => $order,
            'action' => config('app.payment_url'),
            'response' => $results
        ];
        $this->addLog($log, $details['id ']);
        return $results;
    }

    private function addLog($log, $user_id)
    {
        try
        {
            return Log::create([
                'log' => $log,
                'user_id' => $user_id,
                'session_hash' => session()->getId()
            ]);
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function getMembershipTypeAmount($membership)
    {
        $amount = 0;
        if($membership === 'lounge'){
            $amount = config('app.membership_amounts.lounge');
        }
        else if ($membership === 'sanctuary'){
            $amount = config('app.membership_amounts.sanctuary');
        }
        else if ($membership === 'retreat'){
            $amount = config('app.membership_amounts.retreat');
        }
        else if($membership === 'resident'){
            $amount = config('app.membership_amounts.resident');
        }
        return $amount;
    }
}
