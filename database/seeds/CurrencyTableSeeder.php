<?php

use App\Models\Cuurency;
use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuurency::create([
            'name_ar'=>'دولار',
            'name_en'=>'Dollar',
            'name_fr'=>'le DOLLAR',
            'code'=>'USD',
            'is_active'=> 1,
            'excange_value'=>'18.55',
        ]);
    }
}
