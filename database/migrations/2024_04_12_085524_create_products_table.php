<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_code')->unique()->nullable();
            $table->string('product_name');
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('selling_price', 10, 2);
            $table->integer('quantity');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('color')->nullable();
            $table->decimal('discount', 5, 2)->nullable();
            $table->string('size')->nullable();
            $table->text('features')->nullable();
            $table->string('tag')->nullable();
            $table->string('categories_product')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};