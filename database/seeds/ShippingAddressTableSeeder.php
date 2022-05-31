<?php

use App\Models\ShippingAddress;
use Illuminate\Database\Seeder;

class ShippingAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShippingAddress::create([

            'address'=>'القاهره القاهره القاهره',
            'user_id'=>'1',
        ]);
    }
}
