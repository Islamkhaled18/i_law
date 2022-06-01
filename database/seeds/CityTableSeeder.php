<?php

use App\Models\City;
use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name_ar'=>'القاهره الجديد',
            'name_en'=>'New Cairo',
            'name_fr'=>'Nouveau Caire',
            'city_code'=>'New Cairo',
            'governorate_id'=> '1',

        ]);
    }
}
