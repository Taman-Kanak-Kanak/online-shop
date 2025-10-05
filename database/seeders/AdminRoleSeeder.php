<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRoles = [
            [
                'name' => "developer",
                'desc' => "Ini Developer",
            ],
            [
                'name' => "superadmin",
                'desc' => "Ini Superadmin"
            ]
        ];

        foreach($adminRoles as $role) {
            DB::table('admin_roles')->insert([
                'role_name' => $role['name'],
                'description' => $role['desc'],
                'created_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
