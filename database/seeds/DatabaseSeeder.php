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
        $this->call(ProductsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(UserPermissionsTableSeeder::class);
    }
}
