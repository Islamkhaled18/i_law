<?php

use App\Models\Cart;
use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Cart::create([

            'user_id'=>'1',
            'book_id'=>'1',
            'type'=>'PDF',
            'quantity'=>'2',
            'shipping_address'=>'المحله الكبرى',
            'coupon'=>'20%',
        ]);
    }
}
