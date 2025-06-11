<?php

namespace Database\Seeders;

use App\Models\Store;
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
        Store::factory(1)->create([
            'name' => 'Restaurante Dos Testes'
        ]);

        User::factory()->create([
            'name' => 'Joao Vital',
            'email' => 'j@g.com',
            'password' => Hash::make('123'),
            'store_id' => 1,
        ]);
    }
}
