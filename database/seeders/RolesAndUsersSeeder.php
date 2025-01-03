<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolesAndUsersSeeder extends Seeder
{
    public function run()
    {
        // Define roles
        $roles = ['administrator', 'author', 'editor', 'contributor', 'subscriber', 'customer'];

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        }

        // Create a default admin user
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'], // Replace with your desired email
            [
                'name' => 'Admin User',
                'password' => bcrypt('918273'), // Replace with your desired password
            ]
        );

        // Assign the administrator role
        $admin->assignRole('administrator');
    }
}