<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nama' => 'Admin',
            'email' => 'Admin@gmail.com',
            'jabatan' => 'Admin',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);
    }
}
