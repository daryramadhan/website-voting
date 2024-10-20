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
                'nis' => '11111',
                'name' => 'admin',
                'role' => 'admin',
                'password' => bcrypt('238746235'),
                'password_row' => '238746235'
            ],
        );
        
    }
}
