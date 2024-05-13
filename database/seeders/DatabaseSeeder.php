<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => env('DEFAULT_USER_NAME', 'User McUserFace'),
            'email' => env('DEFAULT_USER_EMAIL', 'email@email.email'),
            'password' => env('DEFAULT_USER_PASSWORD_HASH', Hash::make('password')),
        ]);
    }
}
