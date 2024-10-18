<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create(
            [
                'nis' => '42986',
                'name' => 'admin',
                'role' => 'admin',
                'password' => bcrypt('12345678'),
                'password_row' => '123456778'
            ],
            [
                'nis' => '12387',
                'name' => 'ACHMAD FAUZY FERDIANSYAH',
                'role' => 'student',
                'password' => bcrypt('312186'),
                'password_row' => '312186'
            ],
        );
        
    }
}
