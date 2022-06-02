<?php

use App\Models\Vendor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class VendorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('vendors')->delete();

        $vendors = [
            [
                'id' => 1,
                'name' => 'Khaled',
                'email' => 'khaled@gmail.com',
                'user_name' => 'khaled kamal',
                'password' => bcrypt('123456789'),
                'is_active' => '1',
                'default_language' => 'Arabic',
                'country_id' => '1',
                'governorate_id' => '1',
                'city_id' => '1',
                'address' => 'المحله الكبرى',
                'land_line' => '01055699898956',
                'phone' => '0101111515',
                'fax' => '0546546546',
                'whatsApp' => '012345677',
                'company_name' => 'maadi',
                'bio' => 'bio bio bio bio bio bio',
                'image' => 'iJA3kQASpfECkd6aKPxzjs3rSETF1VOO1jR5m6MN.jpg'
            ],
            [
                'id' => 2,
                'name' => 'salem',
                'email' => 'salem@gmail.com',
                'user_name' => 'salem kamal',
                'password' => bcrypt('123456789'),
                'is_active' => '1',
                'default_language' => 'Arabic',
                'country_id' => '1',
                'governorate_id' => '1',
                'city_id' => '1',
                'address' => 'المحله الكبرى',
                'land_line' => '01055699898956',
                'phone' => '0101111515',
                'fax' => '0546546546',
                'whatsApp' => '012345677',
                'company_name' => 'maadi',
                'bio' => 'bio bio bio bio bio bio',
                'image' => 'iJA3kQASpfECkd6aKPxzjs3rSETF1VOO1jR5m6MN.jpg'

            ],

        ];

        foreach ($vendors as $vendor) {
            Vendor::create($vendor);
        }
    }
}
