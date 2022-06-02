<?php

use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->delete();

        $sections = [
            [
                'id' => 1,
                'name_ar' => 'الادب',
                'name_en' => 'literature',
                'name_fr' => 'literature',
                'parent_id' => null,
                
            ],
            [
                'id' => 2,
                'name_ar' => 'التاريخ',
                'name_en' => 'History',
                'name_fr' => 'History',
                'parent_id' => '1',

            ],
        ];

        foreach ($sections as $section) {
            Section::create($section);
        }
    }
}
