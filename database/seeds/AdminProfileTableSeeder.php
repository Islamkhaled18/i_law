<?php

use App\Models\profileAdmin;
use Illuminate\Database\Seeder;

class AdminProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        profileAdmin::create([
            'admin_id'=>'1',
        ]);
    }
}
