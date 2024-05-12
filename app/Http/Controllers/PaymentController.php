<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentController extends Controller
{
    //


    public function redirectToGateway(Request $request){

             $cartItems = auth()->user()->carts;
            $randomNumber = str_pad(mt_rand(1, 9999999), 8, '0', STR_PAD_LEFT);

             $order = new Order();
                $order->user_id = auth()->user()->id;
                $order->order_number = 'ORD' .$randomNumber;
                $order->total_amount = $cartItems->sum(function ($cartItem) {
                return $cartItem->quantity * $cartItem->products->selling_price;
             });


            //    $response = Http::withHeaders([
            //     'Authorization' => 'Bearer ' . config('app.flutter_wave'),
            // ])->post("https://api.flutterwave.com/v3/payments", [
            //     'tx_ref' => $transaction->uuid, //U
            //     "amount" => $cost,
            //     "payment_options" => "card,ussd,banktransfer",
            //     "redirect_url" => route('verify_payment', ['organization_id' => $organization->uuid]),
            //     // "meta" => [
            //     //     "consumer_id" => '34',
            //     //     "consumer_mac" => 'frfrfrfr34',
            //     // ],
            //     "customer" => [
            //         "email" => auth()->user()->email,
            //         "phonenumber" => auth()->user()->phone,
            //         "name" => auth()->user()->first_name . ' ' . auth()->user()->last_name,
            //     ],
            //     "customizations" => [
            //         "title" => "HSE board",
            //         "logo" => "http://www.piedpiper.com/app/themes/joystick-v27/images/logo.png",
            //     ],
            // ]);


    }



    public function handlePaymentCallback(Request $request){

    }


    public function webHook(Request $request){


    }
}