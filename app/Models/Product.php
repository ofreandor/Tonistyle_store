<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
       protected $fillable = [
        'product_name',
        'brand_id',
        'category_id',
        'price',
        'quantity',
        'description',
        'color',
        'status',

    ];

    public function brand(): BelongsTo{

        return $this->belongsTo(Brand::class);
    }


      public function category(): BelongsTo{

        return $this->belongsTo(Category::class);
    }


      public function productImages()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

     public function firstImage()
    {
        return $this->hasOne(ProductImage::class)->orderBy('id', 'asc');
    }


      public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }
}