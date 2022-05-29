<?php

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'name_ar'=>'الادب',
            'name_en'=>'Literature',
            'name_fr'=>'Litterature',
            'desc_ar'=>'هذه الصفحه تحتوى على كتب الادب',
            'desc_en'=>'This page contains literature books',
            'desc_fr'=>'Cette page contient des livres de littérature',
            'meta_desc'=>'This page contains literature books',
            'meta_keywords'=>'This page contains literature books',
        ]);
    }
}
