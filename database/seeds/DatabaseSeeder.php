<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        $this->call(AdminsTableSeeder::class);
        $this->call(CurrencyTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(GovernorateTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(WriterTableSeeder::class);
        $this->call(VendorTableSeeder::class);
        $this->call(BookTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(PartnerTableSeeder::class);
        $this->call(ShippingAddressTableSeeder::class);
        $this->call(CartTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(AdminProfileTableSeeder::class);

        

    }
    
}
