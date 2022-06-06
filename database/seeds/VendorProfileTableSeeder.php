<?php

use App\Models\ProfileVendor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VendorProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('profile_vendors')->delete();

        $ProfileVendors = [
            [
                'id' => 1,
                'vendor_id' => '1',
               
            ],
            [
                'id' => 2,
                'vendor_id' => '2',
           

            ],

        ];

        foreach ($ProfileVendors as $ProfileVendor) {
            ProfileVendor::create($ProfileVendor);
        }

    }
}
