<?php

use App\Models\ShippingAddress;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('shipping_addresses')->delete();

        $shipping_addresses = [
            [
                'id' => 1,
                'address' => 'القاهره القاهره القاهره',
                'country' => 'مصر',
                'governorate' => ' القاهره',
                'city' => 'السلام',
                'postal_code' => '123456',
                'phone_number' => '01015151515',
                'user_id' => '1'
            ],
            [
                'id' => 2,
                'address' => 'الاسكندريه الاسكندريه الاسكندريه',
                'country' => 'مصر',
                'governorate' => ' الاسكندريه',
                'city' => 'الاسكندريه',
                'postal_code' => '23465465',
                'phone_number' => '015511515',
                'user_id' => '1'
            ],
        ];

        foreach ($shipping_addresses as $shipping_address) {
            ShippingAddress::create($shipping_address);
        }
    }
}
