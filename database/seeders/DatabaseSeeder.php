<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Eetwenspergezin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            VoedselpakketSeeder::class,
        ]);
        $this->call([
            GezinSeeder::class,
        ]);
        $this->call([
            PersoonSeeder::class,
        ]);
        $this->call([
            EetwensSeeder::class,
        ]);
        $this->call([
            EetwenspergezinSeeder::class,
        ]);
        $this->call([
            ProductpeprvoedselpakketSeeder::class,
        ]);
    }
}
