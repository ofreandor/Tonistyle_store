<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

         Brand::create([
            'brand_name' => 'HP (Hewlett-Packard)',
        ]);

        Brand::create([
            'brand_name' => 'Dell',
        ]);


        Brand::create([
            'brand_name' => 'Nike',
        ]);


        Brand::create([
            'brand_name' => 'Adidas',
        ]);


        Brand::create([
            'brand_name' => 'Samsung',
        ]);


        Brand::create([
            'brand_name' => 'Apple',
        ]);

        Brand::create([
            'brand_name' => 'Lenovo',
        ]);

        Brand::create([
            'brand_name' => 'Gucci',
        ]);


        Brand::create([
            'brand_name' => 'Microsoft',
        ]);



        Brand::create([
            'brand_name' => 'Louis Vuitton',
        ]);


        Brand::create([
            'brand_name' => 'JBL',
        ]);



        Brand::create([
            'brand_name' => 'LG',
        ]);



        Brand::create([
            'brand_name' => 'Huawei',
        ]);


        Brand::create([
            'brand_name' => 'Xiaomi',
        ]);



        Brand::create([
            'brand_name' => 'OnePlus',
        ]);


        Brand::create([
            'brand_name' => 'Google (Pixel)',
        ]);


        Brand::create([
            'brand_name' => 'Oppo',
        ]);


          Brand::create([
            'brand_name' => 'Nokia',
        ]);


        Brand::create([
            'brand_name' => 'infinix',
        ]);

         Brand::create([
            'brand_name' => 'Hisense',
        ]);


         Brand::create([
            'brand_name' => 'Timberland',
        ]);


        Brand::create([
            'brand_name' => 'High Fashion',
        ]);

        Brand::create([
            'brand_name' => 'Oraimo',
        ]);


        Brand::create([
            'brand_name' => 'Nexus',
        ]);




        Brand::create([
            'brand_name' => 'General Products',
        ]);



    }
}