<?php

use App\Models\Writer;
use Illuminate\Database\Seeder;

class WriterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Writer::create([
            'name_ar'=>'اسلام',
            'name_en'=>'Islam',
            'bio'=>'كاتب حصل على دكتوراه في الادب',
        ]);
    }
}
