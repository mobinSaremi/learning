<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Http\Requests\Site\OrderFormRequest;


class ShopController extends Controller
{
    public function postCheckout(OrderFormRequest $request)
    {

        $input = $request->all();

        if ($input['send'] == 'post') {

            $input['payment'] += 5000;
        } else {
            $input['payment'] += 2000;
        }
        $order = Order::create([
            'user_id' => $input['user_id'],
            'fullname' => $input['fullname'],
            'address' => $input['address'],
            'product_id' => $input['product_id'],
            'phone_number' => $input['phone_number'],
            'payment' => $input['payment'],
            'send' => $input['send'],
        ]);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nextpay.org/nx/gateway/token',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'api_key=d76f59c3-b3a1-49aa-ba2c-c95cb9cfe7b1&amount=' . @$order['payment'] . '&order_id=' . @$order->id .  '&custom_json_fields={ "productName":"Shoes752" , "id":52 }&callback_uri='.redirect('finish'),
        ));

        $result = curl_exec($curl);
        curl_close($curl);
        $x = json_decode($result);
        $x2 = (array)$x;

        if (@$x2['trans_id']) {
            $order->update([
                'order_status' => 'paying',
                // 'bank_id' => 2,
                'ref_id' => $x2['trans_id'],
            ]);
            header('Location: ' . 'https://nextpay.org/nx/gateway/payment/' . $x2['trans_id'], true, 301);
            exit;
        } else {
            $order->update([
                'order_status' => 'register',
            ]);
            return redirect('/')->with('error', 'خطا در پرداخت، مجدد تلاش نمایید.');
        }
    }

    public function finish(Request $request)
    {

        // \Log::info(Auth::id());
        $order = Order::where('order_status', 'paying')->orderBy('id', 'DESC')->first();
        $user_order = User::where('id', $order->user_id)->first();

        if (!$order) {
            return redirect('/')->with('error', 'خطا در پرداخت، مجدد تلاش نمایید.');
        }




        if ($request['np_status'] !== "OK") {

            $order->update([
                'order_status' => 'exting',
            ]);

            $number = User::where('id', $order->user_id)->first();


            return redirect('/')->with('error', 'خطا در پرداخت، مجدد تلاش نمایید.');
        } else {

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://nextpay.org/nx/gateway/verify',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => 'api_key=d76f59c3-b3a1-49aa-ba2c-c95cb9cfe7b1&amount=' . $order['payment'] . '&trans_id=' . $request['trans_id'],
            ));

            $result = curl_exec($curl);
            curl_close($curl);

            $x = json_decode($result);
            $x2 = (array)$x;

            //\Log::info($x2);
            $order->update([
                'tracking_code' => @$x2['Shaparak_Ref_Id'],
                'order_status' => 'paid',
            ]);

            $number = User::where('id', $order->user_id)->first();


            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.kavenegar.com/v1/564F5746736E7A56543350484F744764726F6A3567392B2B416C7732555162347857304C4A7866655158593D/verify/lookup.json?receptor=' . @$number->mobile . '&type=sms&template=pai-ayda&token=' . @$order->payment,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            return redirect()->route('panel-order')->with('success', 'پرداخت با موفقیت انجام شد');
        }
    }
}
