<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Admin awal (untuk akses fitur manajemen)
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'barbershop@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('barbertasik2026'),
            'is_admin' => true,
        ]);

    }
}
