<?php

use App\Models\Governorate;
use Illuminate\Database\Seeder;

class GovernorateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Governorate::create([
            'name_ar'=>'القاهره',
            'name_en'=>'Cairo',
            'name_fr'=>'Le Caire',
            'governorate_code'=>'Cairo',
            'country_id'=> '1',
        ]);
    }
}
