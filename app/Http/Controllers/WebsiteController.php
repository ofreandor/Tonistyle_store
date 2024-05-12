<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //

    public function home(){


        $products = Product::where('status', 'active')->get();
        return view('website.home', compact('products'));
    }


    public function shop(){


        $products = Product::where('status', 'active')->get();

        // dd($products);
        return view('website.shop', compact('products'));
    }


    public function productDetails($id){

        $product = Product::findOrFail($id);
        return view('website.product_details', compact('product'));

    }


    public function customerLogin(){

        return view('website.login');
    }
}
