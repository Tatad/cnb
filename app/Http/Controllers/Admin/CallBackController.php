<?php

namespace App\Http\Controllers\Admin;

use App\Call_Back;
use App\Http\Controllers\Controller;
use App\Http\Requests\CallBackRequest;
use App\Jobs\SendEmailJob;
use App\Services\CallBackService;
use App\Token;
use Exception;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;


class CallBackController extends Controller
{

    private $service;

    /**
     * CallBAckService constructor.
     * @param CallBackService $service
     */

    public function __construct(CallBackService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('admin.pages.call_back_dashboard');
    }

    /**
     * @param Request $request
     * @return array
     */
    public function getList(Request $request)
    {
        return $this->service->getList($request);
    }

    /**
     * @param CallBackRequest $request
     * @return int|string
     */
    public function call_back_request(CallBackRequest $request)
    {
        $data = $request->all();
        try {
            $call_back = Call_Back::create([
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'] ?? null
            ]);
            $this->addCallBackToken($call_back->id);
            $this->sendEmailToAdmin($call_back);
            if (isset($call_back['email'])) {
                $this->sendEmailToUser($call_back);
            }
            return 1;
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }

    /**
     * @param $user
     */
    private function sendEmailToAdmin($user)
    {
        $details = [
            'user' => $user,
            //'to' => config('app.admin_email_call_back'),
            'to' => 'info@cnbdubai.com',
            'view' => 'email.call_back_request_admin',
            'subject' => 'CNB Call-Back Request'
        ];
        dispatch(new SendEmailJob($details))->onQueue('email');
    }

    /**
     * @param $call_back_id
     * @return string
     */
    private function addCallBackToken($call_back_id)
    {
        try {
            return Token::create([
                'call_back_id' => $call_back_id,
                'token' => Str::random(40),
            ]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param $user
     * @return string
     */
    private function sendEmailToUser($user)
    {
        $details = [
            'user' => $user,
            'to' => $user['email'],
            'view' => 'email.call_back_request_user',
            'subject' => 'CNB Call-Back Request'
        ];
        dispatch(new SendEmailJob($details))->onQueue('email');
    }


    /**
     * @param $call_back_id
     * @return Application|Factory|View
     */
    public function send_url_view($call_back_id)
    {
        $call_back_user = Call_Back::where('id', '=', $call_back_id)->first();
        return view('admin.pages.send_url_view', ['call_back_user' => $call_back_user]);
    }

    public function send_url($call_back_id, Request $request)
    {
        $token = Token::where('call_back_id', '=', $call_back_id)->first();
        $url = env('APP_URL') . '/register/' . $token['token'] . '/' . $token['call_back_id'];
        $email = $request->get('email');
        $call_back_user = Call_Back::where('id', '=', $call_back_id)->first();
        try {
            $details = [
                'user' => $call_back_user,
                'url' => $url ?? '',
                'to' => $email ?? '',
                'view' => 'email.registration_url',
                'subject' => 'CNB Registration URL'
            ];
            dispatch(new SendEmailJob($details))->onQueue('email');
            return redirect('/admin/call_back');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete_request($call_back)
    {
        return Call_Back::where('id', '=', $call_back)->delete();
    }
}
