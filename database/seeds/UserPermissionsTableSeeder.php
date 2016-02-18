<?php

use App\Permission;
use App\UserPermission;
use Illuminate\Database\Seeder;

class UserPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionIds = Permission::lists('id');

        foreach ($permissionIds as $permissionId) {
            UserPermission::create(
              [
                'user_id' => 1,
                'permission_id' => $permissionId,
              ]
            );
        }

    }
}
