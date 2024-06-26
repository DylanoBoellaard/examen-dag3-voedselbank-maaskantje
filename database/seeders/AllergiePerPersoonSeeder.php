<?php

namespace Database\Seeders;

use App\Models\AllergiePerPersoon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllergiePerPersoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'persoonId' => 4,
                'allergieId' => 1,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'persoonId' => 5,
                'allergieId' => 2,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'persoonId' => 6,
                'allergieId' => 3,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'persoonId' => 7,
                'allergieId' => 4,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'persoonId' => 8,
                'allergieId' => 3,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'persoonId' => 9,
                'allergieId' => 2,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'persoonId' => 10,
                'allergieId' => 5,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'persoonId' => 12,
                'allergieId' => 2,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'persoonId' => 13,
                'allergieId' => 4,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'persoonId' => 14,
                'allergieId' => 1,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'persoonId' => 15,
                'allergieId' => 3,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'persoonId' => 16,
                'allergieId' => 5,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'persoonId' => 17,
                'allergieId' => 1,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'persoonId' => 17,
                'allergieId' => 2,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'persoonId' => 18,
                'allergieId' => 4,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'persoonId' => 19,
                'allergieId' => 4,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
        ];

        foreach ($data as $item) {
            AllergiePerPersoon::create($item);
        }
    }
}
