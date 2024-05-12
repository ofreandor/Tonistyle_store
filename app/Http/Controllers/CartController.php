<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

    }

 public function addToCart(Request $request, $id)
{
    if (Auth::check()) {
        $userId = Auth::id();
        $userCart = Cart::where('user_id', $userId)->first();

        if (!$userCart) {
            $userCart = new Cart();
            $userCart->user_id = $userId;
        }

        $existingCartItem = $userCart->where('product_id', $id)->first();

        if ($existingCartItem) {
            $existingCartItem->quantity++;
        } else {
            $newCartItem = new Cart();
            $newCartItem->user_id = $userId;
            $newCartItem->product_id = $request->product_id;
            $newCartItem->quantity = $request->quantity;
            $newCartItem->color = $request->color;
            $newCartItem->size = $request->size;

            // Save the new cart item only if it's a new item
            $newCartItem->save();
        }
    } else {
        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'color' => $request->color,
                'size' => $request->size,
            ];
        }

        Session::put('cart', $cart);
    }

    return redirect()->back()->with([
        'toast' => 'success',
        'message' => 'Product has been added to the cart successfully',
    ]);
}






    public function shoppingCart(){

        $cartItems = session()->get('cart', []);

        return view('website.cart', compact('cartItems'));
    }




    public function updateCart(Request $request)
{
    $productId = $request->input('product_id');
    $quantity = $request->input('quantity');

    // Update the cart item in the session for guest users
    if (!Auth::check()) {
        // Update the session cart
        $cart = session()->get('cart', []);
        $cart[$productId]['quantity'] = $quantity;
        session()->put('cart', $cart);
        // Recalculate total
        $total = $this->calculateTotal($cart);
        return response()->json(['total' => number_format($total, 2)]);
    }

    // Update the cart item in the database for authenticated users
    $cartItem = Cart::where('user_id', Auth::user()->id)
                    ->where('product_id', $productId)
                    ->first();
    if ($cartItem) {
        $cartItem->quantity = $quantity;
        $cartItem->save();
        // Recalculate total
        $total = $this->calculateTotal(Auth::user()->id);
        return response()->json(['total' => number_format($total, 2)]);
    }

    return response()->json(['error' => 'Cart item not found']);
}

public function calculateTotal($userId)
{
    $total = 0;

    if (!Auth::check()) {
        // For guest users, calculate total from session data
        $cart = session()->get('cart', []);
        foreach ($cart as $productId => $cartItem) {
            $product = Product::find($productId);
            if ($product) {
                $total += $product->selling_price * $cartItem['quantity'];
            }
        }
    } else {
        // For authenticated users, calculate total from database
        $cartItems = Cart::where('user_id', $userId)->get();
        foreach ($cartItems as $cartItem) {
            $product = Product::find($cartItem->product_id);
            if ($product) {
                $total += $product->selling_price * $cartItem->quantity;
            }
        }
    }

    return $total;
}








    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //




    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {



   }












    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        if (Auth::check()) {

            Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->delete();
        } else {

            $cart = session()->get('cart', []);
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

          return redirect()->back()->with([
            'toast' => 'success',
            'message' => 'Product removed successfully',
        ]);

    }
}
