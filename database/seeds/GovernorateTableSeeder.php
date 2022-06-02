<?php

use App\Models\Governorate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GovernorateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('governorates')->delete();

        $governorates = [
            [
                'id' => 1,
                'name_ar' => 'القاهره',
                'name_en' => 'Cairo',
                'name_fr' => 'Caire',
                'governorate_code' => 'CAI',
                'country_id' => '1'
            ],
            [
                'id' => 2,
                'name_ar' => 'الاسكندريه',
                'name_en' => 'Alexandria',
                'name_fr' => 'Alexandria',
                'governorate_code' => 'Alex',
                'country_id' => '1'
            ],
            [
                'id' => 3,
                'name_ar' => 'جده',
                'name_en' => 'Jeddah',
                'name_fr' => 'Jeddah',
                'governorate_code' => 'JED',
                'country_id' => '2'
            ],
            [
                'id' => 4,
                'name_ar' => 'الدمام',
                'name_en' => 'Dammam',
                'name_fr' => 'Dammam',
                'governorate_code' => 'Dammam',
                'country_id' => '2'
            ],
        ];

        foreach ($governorates as $governorate) {
            Governorate::create($governorate);
        }
    }
}
