<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Eetwenspergezin;

use App\Models\Leverancier;
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
            LeverancierSeeder::class,
            CategorieSeeder::class,
            MagazijnSeeder::class,
            GezinSeeder::class,
            AllergieSeeder::class,
            ContactSeeder::class,
            EetwensSeeder::class,
            VoedselpakketSeeder::class,
            PersoonSeeder::class,
            EetwenspergezinSeeder::class,
            ProductpeprvoedselpakketSeeder::class,
            ContactPerGezin::class,
            ContactPerLeverancierSeeder::class,
            ProductSeeder::class,
            ProductPerLeverancierSeeder::class,
            ProductPerMagazijnSeeder::class,
            AllergiePerPersoonSeeder::class
        ]);
    }
}
