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

        \App\Models\User::truncate();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'rut' => '12345678-9',
            'nombre' => 'Test',
            'apellido' => 'User',
            'password' => bcrypt('password123'),
        ]);

    $this->call(ProductSeeder::class);
    $this->call(ClientSeeder::class);
    }
}
