<?php

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->delete();

        $orders = [
            [
                'id' => 1,
                'order_no' => '#1',
                'order_date' => '2022/07/01',
                'total' => '200EGP',
                'payment_method' => 'Prepaid',
                'shippingAddress_id' => '1',
                'shipping_method' => 'Aramex',
                'status' => 'pending',
                'vendor_id' => '1',
            ],
            [
                'id' => 2,
                'order_no' => '#2',
                'order_date' => '2022/07/02',
                'total' => '250EGP',
                'payment_method' => 'Prepaid',
                'shippingAddress_id' => '2',
                'shipping_method' => 'Aramex',
                'status' => 'pending',
                'vendor_id' => '1',

            ],
        ];

        foreach ($orders as $order) {
            Order::create($order);
        }


    }
}
