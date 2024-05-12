<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

      protected $fillable = [
        'category_name',
        'status',
    ];


       public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}