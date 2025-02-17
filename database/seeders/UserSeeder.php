<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['name' => 'im admin'],
            [
                'email' => 'admin@gmail.com',
                'password' => bcrypt('foobarrr'),
                'email_verified_at' => now(),
            ],
        );

        $teacher = User::firstOrCreate(
            ['name' => 'im teacher'],
            [
                'nuptk' => '1234123412341234',
                'email' => 'teacher@gmail.com',
                'password' => bcrypt('foobarrr'),
                'email_verified_at' => now(),
            ],
        );

        $teacher2 = User::firstOrCreate(
            ['name' => 'im teacher 2'],
            [
                'nuptk' => '1234123412341238',
                'email' => 'teacher2@gmail.com',
                'password' => bcrypt('foobarrr'),
                'email_verified_at' => now(),
            ],
        );

        $student = User::firstOrCreate(
            ['name' => 'im student'],
            [
                'email' => 'student@gmail.com',
                'password' => bcrypt('foobarrr'),
            ],
        );

        $student2 = User::firstOrCreate(
            ['name' => 'im student 2'],
            [
                'email' => 'student2@gmail.com',
                'password' => bcrypt('foobarrr'),
            ],
        );

        $teacherUnverified = User::firstOrCreate(
            ['name' => 'teacher unverified'],
            [
                'nuptk' => '1234123412341235',
                'email' => 'nonteacher@gmail.com',
                'password' => bcrypt('foobarrr'),
                'email_verified_at' => null,
            ],
        );
    }
}
