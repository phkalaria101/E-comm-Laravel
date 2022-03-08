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
            'name'=>'MI MOBILE',
            'price'=>'20000',
            "category"=>"Mobile",
            "description"=> "Smart Phone",
            "gallery"=>"https://rukminim1.flixcart.com/image/416/416/k9k8wi80/cases-covers/back-cover/q/f/3/spigen-611cs26441-original-imafrbrku7mskxkm.jpeg?q=70"
            ],
            [
                'name'=>'hp laptop',
                'price'=>'100000',
                "category"=>"Electronic",
                "description"=> "Laptops",
                "gallery"=>"https://rukminim1.flixcart.com/image/416/416/kyrlifk0/computer/o/1/g/14s-fq1092au-thin-and-light-laptop-hp-original-imagaxgtdcyhzzjw.jpeg?q=70"
            ],
            [
                'name'=>'Body Exfolint',
                'price'=>'1200',
                "category"=>"Beauty and Cosmetic",
                "description"=> "Body Exfolint for skin",
                "gallery"=>"https://rukminim1.flixcart.com/image/416/416/kxaq7ww0/combo-kit/g/n/i/face-care-kit-for-winters-with-moisturizing-face-wash-and-face-original-imag9s74xueggm2g.jpeg?q=70"
            ],
            [
                'name'=>'Card Scanner',
                'price'=>'10000',
                "category"=>"Electronic",
                "description"=>"Swipe and pay Your dabit Or Cradit card ",
                "gallery"=>"https://rukminim1.flixcart.com/image/416/416/ji20r680/portable-pos-device/h/s/d/tps-900b-telpo-original-imaf5t4zuj4kjtbh.jpeg?q=70"
            ]
        ]);
    }
}
