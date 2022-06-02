<?php

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();

        $cities = [
            [
                'id' => 1,
                'name_ar' => 'القاهره الجديده',
                'name_en' => 'New cairo',
                'name_fr' => 'Nouvou Caire',
                'city_code' => 'CAI',
                'governorate_id' => '1'
            ],
            [
                'id' => 2,
                'name_ar' => 'مصر الجديده',
                'name_en' => 'New Egypt',
                'name_fr' => 'Nouvou Egypt',
                'city_code' => 'NEW Egypt',
                'governorate_id' => '1'
            ],
            [
                'id' => 3,
                'name_ar' => 'الهانوفيل',
                'name_en' => 'Hanouvel',
                'name_fr' => 'Hanouvel',
                'city_code' => 'Hanouvel',
                'governorate_id' => '2'
            ],
            [
                'id' => 4,
                'name_ar' => 'سيدي بشر',
                'name_en' => 'sedi bishr',
                'name_fr' => 'sedi bishr',
                'city_code' => 'sedi bishr',
                'governorate_id' => '2'
            ],
            [
                'id' => 5,
                'name_ar' => 'مكه',
                'name_en' => 'mekka',
                'name_fr' => 'mekka',
                'city_code' => 'Mekka',
                'governorate_id' => '3'
            ],
            [
                'id' => 6,
                'name_ar' => 'المدينه',
                'name_en' => 'madina',
                'name_fr' => 'madina',
                'city_code' => 'madina',
                'governorate_id' => '3'
            ],
            [
                'id' => 7,
                'name_ar' => 'الرياض',
                'name_en' => 'ryad',
                'name_fr' => 'ryad',
                'city_code' => 'ryad',
                'governorate_id' => '4'
            ],
           
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
