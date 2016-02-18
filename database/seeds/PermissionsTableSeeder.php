<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultPermissions = ['View Users', 'Add Users', 'Edit Users'];

        foreach ($defaultPermissions as $permission) {
            Permission::create(['label' => $permission]);
        }
    }
}
