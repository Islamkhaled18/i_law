<?php

use App\Models\OrderItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_items')->delete();

        $orderitems = [
            [
                'id' => 1,
                'user_id' => '1',
                'book_id' => '1',
                'order_id' => '1',
            ],
            [
                'id' => 2,
                'user_id' => '1',
                'book_id' => '2',
                'order_id' => '2',

            ],
        ];

        foreach ($orderitems as $orderitem) {
            OrderItem::create($orderitem);
        }
    }
}
