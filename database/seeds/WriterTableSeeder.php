<?php

use App\Models\Writer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class WriterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('writers')->delete();

        $wriers = [
            [
                'id' => 1,

                'name_ar' => 'اسلام',
                'name_en' => 'Islam',
                'bio' => 'كاتب حصل على دكتوراه في الادب',
                'image' => 'j6sBc261xPOi4sBLYEsJIex0MvzQPJ99BniAA5Fq.jpg',
            ],
            [
                'id' => 2,
                'name_ar' => 'عادل',
                'name_en' => 'Adel',
                'bio' => 'كاتب حصل على دكتوراه في التاريخ',
                'image' => 'j6sBc261xPOi4sBLYEsJIex0MvzQPJ99BniAA5Fq.jpg',

            ],

        ];

        foreach ($wriers as $wrier) {
            Writer::create($wrier);
        }
    }
}
