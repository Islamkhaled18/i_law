<?php

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'name_ar'=>'مصر',
            'name_en'=>'Egypt',
            'name_fr'=>'Egypte',
            'country_code'=>'EGY',
            'country_phone_code'=> '+20',
        ]);
    }
}
