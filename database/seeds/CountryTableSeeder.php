<?php

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();

        $countries = [
            [
                'id' => 1,
                'name_ar' => 'مصر',
                'name_en' => 'Egypt',
                'name_fr' => 'Egypte',
                'country_code' => 'Egy',
                'country_phone_code' => '+20',
                'currency_id'=>'1'
            ],
            [
                'id' => 2,
                'name_ar' => 'السعوديه',
                'name_en' => 'Saudi Arabia',
                'name_fr' => 'Arabie Saoudite',
                'country_code' => 'SA/ KSA',
                'country_phone_code' => '+96'
            ],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
