<?php

use App\Models\Vendor;
use Illuminate\Database\Seeder;

class VendorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendor::create([

           'name'=>'Khaled',
           'email'=>'khaled@gmail.com',
           'user_name'=>'khaled kamal',
           'password'=>bcrypt('123456789'),
           'is_active'=>'1',
           'default_language'=>'Arabic',
           'country_id'=>'1',
            'governorate_id'=>'1',
           'city_id'=>'1',
           'address'=>'المحله الكبرى',
           'land_line'=>'01055699898956',
           'phone'=>'0101111515',
           'fax'=>'0546546546',
           'whatsApp'=>'012345677',
           'company_name'=>'maadi',
        ]);
    }
}
