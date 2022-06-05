<?php

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->delete();

        $books = [
            [
                'id' => 1,
                'name_ar' => 'الامم',
                'name_en' => 'Nations',
                'name_fr' => 'Nations',
                'desc_ar' => 'كتاب حاصل على جائزه في الادب',
                'desc_en' => 'Award winning book in literature',
                'desc_fr' => 'Livre primé en littérature',
                'index_ar' => 'كتاب حاصل على جائزه في الادب',
                'index_en' => 'Award winning book in literature',
                'index_fr' => 'Livre primé en littérature',
                'writer_id' => '1',
                'vendor_id' => '1',
                'section_id' => '1',
                'stock' => '50',
                'price' => '500',
                'offer' => '20',
                'type' => 'PDF',
                'is_active' => 1,
                'image' => 'j6sBc261xPOi4sBLYEsJIex0MvzQPJ99BniAA5Fq.jpg',
            ],
            [
                'id' => 2,
                'name_ar' => 'الامل',
                'name_en' => 'Hopes',
                'name_fr' => 'Hopes',
                'desc_ar' => 'كتاب حاصل على جائزه في الادب',
                'desc_en' => 'Award winning book in literature',
                'desc_fr' => 'Livre primé en littérature',
                'index_ar' => 'كتاب حاصل على جائزه في الادب',
                'index_en' => 'Award winning book in literature',
                'index_fr' => 'Livre primé en littérature',
                'writer_id' => '2',
                'vendor_id' => '2',
                'section_id' => '2',
                'stock' => '50',
                'price' => '500',
                'offer' => '20',
                'type' => 'PDF',
                'is_active' => 1,
                'image' => 'j6sBc261xPOi4sBLYEsJIex0MvzQPJ99BniAA5Fq.jpg',

            ],

        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
