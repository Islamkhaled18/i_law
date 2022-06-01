<?php

use App\Models\FAQ;
use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FAQ::create([
            'question_ar'=>'ما هو السؤال ؟',
            'question_en'=>'what is question ?',
            'question_fr'=>'Quelle est la question',
            'answer_ar'=>'مثال لنص تكون به الاجابه',
            'answer_en'=>'This page answers',
            'answer_fr'=>'Cette page contient réponses réponses réponses',
        ]);
    }
}
