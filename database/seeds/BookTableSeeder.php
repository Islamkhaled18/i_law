<?php

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([

           'name_ar'=>'الامم',
           'name_en'=>'Nations',
           'name_fr'=>'Nations',
            'desc_ar'=>'كتاب حاصل على جائزه في الادب',
            'desc_en'=>'Award winning book in literature',
            'desc_fr'=>'Livre primé en littérature',
            'index_ar'=>'كتاب حاصل على جائزه في الادب',
            'index_en'=>'Award winning book in literature',
            'index_fr'=>'Livre primé en littérature',
            'writer_id'=>'1',
            'vendor_id'=>'1',
            'section_id'=>'1',
            'stock'=>'50',
            'price'=>'500',
            'offer'=>'20',
           'type'=>'PDF',
           'is_active'=> 1,

        ]);
    }
}
