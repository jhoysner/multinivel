<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(CooperativeLevelTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(ProvinceTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AccountConfirmationTableSeeder::class);
        $this->call(SponsorFollowerTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(PayoutTableSeeder::class);
        $this->call(SocialAccountTableSeeder::class);


    }
}