<?php

namespace App\Helpers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Helper
{
    public static function createPermissions()
    {
        $permisions = [
            [
                'name' => 'Add Categories',
                'guard_name' => 'api',
            ],

            [
                'name' => 'Add Tutor Jobs',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Add Proposal',
                'guard_name' => 'api',
            ],
            [
                'name' => 'View Proposals',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Edit Proposal',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Edit Tutor Job',
                'guard_name' => 'api',
            ],

            [
                'name' => 'View Reviews',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Add Reviews',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Delete Tutor Job',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Delete Proposal',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Approve Request',
                'guard_name' => 'api',
            ],
            [
                'name' => 'View Payment',
                'guard_name' => 'api',
            ],
           
        ];
        Permission::insert($permisions);
    }

    public static function createRoles()
    {
        Role::create([
            'name' => 'Admin',
            'guard_name' => 'api',
        ])->givePermissionTo([
            'Add Categories',
            'View Payment',
            'View Reviews',
        ]);

        Role::create([
            'name' => 'Teacher',
            'guard_name' => 'api',
        ])->givePermissionTo([
            'View Reviews',
            'Edit Proposal',
            'Add Proposal',
            'Delete Proposal',
        ]);

        Role::create([
            'name' => 'Student',
            'guard_name' => 'api',
        ])->givePermissionTo([
            'Add Categories',
            'View Reviews',
            'Add Reviews',
            'Edit Tutor Job',
            'Add Tutor Jobs',
            'Delete Tutor Job',
        ]);
    }
}
