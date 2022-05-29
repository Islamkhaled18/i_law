<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name'=>'hazem',
           'email'=>'hazem@gmail.com',
           'password'=>bcrypt('123456789'),
           'user_name'=>'Hazem Khaled',
           'default_language'=>'Arabic',
            'country_id'=>'1',
            'governorate_id'=>'1',
            'city_id'=>'1',
           'address'=>'المحله الكبرى',
           'land_line'=>'01313',
           'phone'=>'4545',
           'fax'=>'5454',
           'whatsApp'=>'4848',
            'is_active'=>1,
        ]);
    }
}
