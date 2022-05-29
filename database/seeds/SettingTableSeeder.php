<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['key' => 'welcome_title', 'value' => 'welcome to our sitr'],
            ['key' => 'welcome_subject', 'value' => 'our site is our vision'],
            ['key' => 'content_question', 'value' => 'what is your vision?'],
            ['key' => 'content_answer', 'value' => 'my vision is what you want to be'],
            ['key' => 'our_vision', 'value' => 'Success Success Success'],
            ['key' => 'our_mission', 'value' => 'strugle strugle strugle strugle'],
            ['key' => 'address', 'value' => 'Dubai'],
            ['key' => 'map_addess_link', 'value' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13675.833764016936!2d31.3732275!3d31.0274075!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x859ee8ea1a8da4ae!2sTechnomasr%20for%20web%20solutions!5e0!3m2!1sen!2seg!4v1596684538546!5m2!1sen!2seg'],
            ['key' => 'email', 'value' => 'admin@info.com'],
            ['key' => 'phone', 'value' => '01015151515'],
            ['key' => 'instgram', 'value' => 'https://www.instagram.com'],
            ['key' => 'facebook', 'value' => 'https://www.facebook.com'],
            ['key' => 'youtube', 'value' => 'https://www.youtube.com'],
            ['key' => 'twitter', 'value' => 'https://www.twitter.com'],
        ];

        DB::table('settings')->insert($data);
    }
}
