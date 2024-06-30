<?php

namespace Database\Seeders;

use App\Models\Allergie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllergieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'naam' => 'Gluten',
                'omschrijving' => 'Allergisch voor gluten',
                'anafylactischRisico' => 'ZeerLaag',
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'naam' => 'Pindas',
                'omschrijving' => 'Allergisch voor pindas',
                'anafylactischRisico' => 'Hoog',
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'naam' => 'Schaaldieren',
                'omschrijving' => 'Allergisch voor schaaldieren',
                'anafylactischRisico' => 'RedelijkHoog',
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'naam' => 'Hazelnoten',
                'omschrijving' => 'Allergisch voor hazelnoten',
                'anafylactischRisico' => 'Laag',
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'naam' => 'Lactose',
                'omschrijving' => 'Allergisch voor lactose',
                'anafylactischRisico' => 'ZeerLaag',
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'naam' => 'Soja',
                'omschrijving' => 'Allergisch voor soja',
                'anafylactischRisico' => 'ZeerLaag',
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
        ];

        foreach ($data as $item) {
            Allergie::create($item);
        }
    }
}
