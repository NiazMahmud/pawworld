<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'PEDIGREE  Dog Food ',
                "price"=>"350",
                "description"=>"Contains one (1) 15.9 lb. bag of PEDIGREE Small Dog Complete Nutrition Adult Dry Dog Food, Roasted Chicken, Rice & Vegetable Flavor",
                "category"=>"Dog",
                "gallery"=>"https://m.media-amazon.com/images/I/71KOrEE3LKL._AC_SL1500_.jpg"
            ],
            [
                'name'=>'IAMS Minichunks Adult Dry Dog Food, Chicken ',
                "price"=>"500",
                "description"=>"Adult Dry Dog Food: Give your dog the nutrition they need in the small kibble size they prefer, with real, farm-raised chicken as the first ingredient to promote strong muscles with premium-sourced protein",
                "category"=>"Dog",
                "gallery"=>"https://m.media-amazon.com/images/I/71nV3qS541L._AC_SL1500_.jpg"
            ],
            [
                'name'=>'Meow Mix Original Choice Dry Cat Food ',
                "price"=>"250",
                "description"=>"Contains (1) 16 Pound Bag of Dry Cat Food",
                "category"=>"Cat",
                "gallery"=>"https://m.media-amazon.com/images/I/81asWIyOp+L._AC_SL1500_.jpg"
            ],
            [
                'name'=>'Purina Friskies Dry Cat Food, Gravy Swirlers - 22 lb. Bag ',
                "price"=>"200",
                "description"=>"One (1) 22 pound Bag - Purina Friskies Dry Cat Food, Gravy Swirlers",
                "category"=>"Cat",
                "gallery"=>"https://m.media-amazon.com/images/I/815JB9NxgjL._AC_SL1500_.jpg"
             ]
        ]);
    }
}
