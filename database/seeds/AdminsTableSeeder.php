<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'Super Admin',
            'user_name'=>'Super Admin',
            'email' => 'Super_admin@gmail.com',
            'password'=>Hash::make('123456789'),
            'phone'=> '01010101010',
            'is_active'=> 1,
            'default_language'=>'Arabic',
            'image'=> 'gvpx2OlXc2krppkUREhDBqJugPfvbzMVyjdEoYAN.png',
        ]);
    }
}
