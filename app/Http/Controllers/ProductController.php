<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::with('productImages')->get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
            $categories = Category::all();
            $brands = Brand::all();
          return view('admin.product.add', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'product_name' => 'required',
            'selling_price'=> 'required|numeric',
            'category_id' => 'required',
            'brand_id' => 'required',
            'quantity' => 'required|numeric|min:1',
            'color' => 'required',
            'discount' => 'required|numeric|min:0',
            'status' => 'required',
            'product_image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required'
        ],[
            'selling_price.required' => 'Price of product is required',
            'category_id.required' => 'Product category is required',
            'brand_id.required' => 'Product brand is required',
             'discount.min' => 'Discount value must be greater than or equal to 0.',
            'quantity.numeric' => 'Quantity of product must be number',
            'product_image.required' => 'Pictures of the product is required',
        ]);

        do{
             $randomNumber = str_pad(rand(1, 99999999), 8, '0', STR_PAD_LEFT);
             $productCode = 'PRT' . $randomNumber;
        }while(Product::where('product_code', $productCode)->exists());


            $product = new Product();
            $product->product_name = $request->product_name;
            $product->product_code = 'PRT' . $randomNumber;
            $product->price = $request->price;
            $product->selling_price = $request->selling_price;
            $product->category_id = $request->category_id;
            $product->brand_id = $request->brand_id;
            $product->quantity = $request->quantity;
            $product->color = $request->color;
            $product->discount = $request->discount;
            $product->status = $request->status;
            $product->features = $request->features;
            $product->description = $request->description;
            $product->save();
        // dd($product);
           $product->refresh();

            if ($request->hasFile('product_image')) {
            foreach ($request->file('product_image') as $image) {
                $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/product_image', $imageName);
                ProductImage::create([
                    'product_id' => $product->id,
                    'product_image' => 'storage/product_image/' . $imageName
                ]);
            }
        }

         return redirect()->route('product')->with('toast', 'success')->with('message', 'Product added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}