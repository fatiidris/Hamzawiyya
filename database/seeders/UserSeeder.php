<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
  

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $adminRole = Role::firstOrCreate(['name' => 'Admin', 'guard_name' => 'web']);
        $teacherRole = Role::firstOrCreate(['name' => 'Teacher', 'guard_name' => 'web']);
        $studentRole = Role::firstOrCreate(['name' => 'Student', 'guard_name' => 'web']);
        $parentRole = Role::firstOrCreate(['name' => 'Parent', 'guard_name' => 'web']);

        // Create admin user
        $adminUser = User::firstOrCreate([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'), // Replace with a secure password
        ]);
        $adminUser->assignRole($adminRole);

        // Create teacher user
        $teacherUser = User::firstOrCreate([
            'name' => 'Teacher User',
            'email' => 'teacher@gmail.com',
            'password' => bcrypt('12345678'), // Replace with a secure password
        ]);
        $teacherUser->assignRole($teacherRole);

        // Create student user
        $studentUser = User::firstOrCreate([
            'name' => 'Student User',
            'email' => 'student@gmail.com',
            'password' => bcrypt('12345678'), // Replace with a secure password
        ]);
        $studentUser->assignRole($studentRole);

        // Create parent user
        $parentUser = User::firstOrCreate([
            'name' => 'Parent User',
            'email' => 'parent@gmail.com',
            'password' => bcrypt('12345678'), // Replace with a secure password
        ]);
        $parentUser->assignRole($parentRole);
    }
}





        
        