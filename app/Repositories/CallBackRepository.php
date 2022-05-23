<?php


namespace App\Repositories;


use App\Call_Back;
use App\Token;
use Illuminate\Http\Request;

class CallBackRepository
{

    public function getList(Request $request)
    {
        $limit = $request->get('length') ?? 10;
        $start = $request->get('start') ?? 0;
        $order = $request->get('order');
        $search = $request->get('search');
        $sortable_columns = ['name', 'phone', 'email'];

        $query = Call_Back::query();
        $query->orderBy('created_at', 'desc');
        if ($order) {
            $sort_by = $sortable_columns[0];
            $direction = $order[0]['dir'];
            $query->orderBy($sort_by, $direction);
        }

        /** Search logic. */
        if (isset($search['value'])) {
            $search_key = $search['value'];
            $query->where('name', 'LIKE', "%$search_key%");
            $query->orWhere('phone', 'LIKE', "%$search_key%");
            $query->orWhere('email', 'LIKE', "%$search_key%");
        }


        $call_back_requests = $query->paginate($limit, ['*'], 'page',($start/$limit)+1);
        $response = [
            'recordsTotal' => $call_back_requests->total(),
            'recordsFiltered' => $call_back_requests->total(),
            'data' => [],
        ];

//var_dump( $_SERVER['SERVER_PROTOCOL']);die;
        /** Format data. */
        foreach($call_back_requests as $call_back_request) {
            $token = Token::where('call_back_id', '=', $call_back_request->id)->first();
            if(isset($token)){
                //
//                $url = $_SERVER['HTTP_HOST'];
//                $matches = null;
//                preg_match('/(https|http):\\/\\/[a-zA-Z]+\\.[a-zA-Z]+\\//', $request->url(), $matches);
//                $app_url = $matches[0] ?? '';
                $url = 'https://' . $_SERVER['HTTP_HOST'].'/register/'.$token['token'].'/'.$token['call_back_id'];
            }
            else{
                $url = '';
            }
            $response['data'][] = [
                $call_back_request->name,
                $call_back_request->phone,
                $call_back_request->email ?? '',
                $url,
                $call_back_request['status'] === 0 ? "Waiting" : "Approved",
                '<a href="#" class="copy_email_address" data-url="'.$url.'" title="Copy Email Address"><i class="material-icons">content_copy</i></a>
                 <a title="Send Email" href="/admin/call_back/send_url/' . $call_back_request->id . '"><i class="material-icons">send</i></a>
                 <a title="Delete Request" href="/admin/call_back/delete/' . $call_back_request->id . '" class="delete_call_back"><i class="material-icons">delete</i></a>',
            ];
        }
        return $response;
    }
}
