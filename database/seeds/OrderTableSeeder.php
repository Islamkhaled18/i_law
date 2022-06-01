<?php

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([

           'order_no'=>'#1',
            'order_date'=>'2022/07/01',
           'total'=>'200EGP',
           'payment_method'=>'Prepaid',
           'shippingAddress_id'=>'1',
           'shipping_method'=>'Aramex',
        ]);
    }
}
