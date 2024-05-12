<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //


    public function placeOrder(){

        $cartItems = session()->get('cart', []);
        return view('user.order', compact('cartItems'));
    }
}