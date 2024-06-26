<?php

namespace Database\Seeders;

use App\Models\Gezin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GezinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'naam' => 'ZevenhuizenGezin',
                'code' => 'G0001',
                'omschrijving' => 'Bijstandsgezin',
                'aantalVolwassenen' => 2,
                'aantalKinderen' => 2,
                'aantalBabys' => 0,
                'totaalAantalPersonen' => 4,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'naam' => 'BergkampGezin',
                'code' => 'G0002',
                'omschrijving' => 'Bijstandsgezin',
                'aantalVolwassenen' => 2,
                'aantalKinderen' => 1,
                'aantalBabys' => 1,
                'totaalAantalPersonen' => 4,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'naam' => 'HeuvelGezin',
                'code' => 'G0003',
                'omschrijving' => 'Bijstandsgezin',
                'aantalVolwassenen' => 2,
                'aantalKinderen' => 0,
                'aantalBabys' => 0,
                'totaalAantalPersonen' => 0,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'naam' => 'ScherderGezin',
                'code' => 'G0004',
                'omschrijving' => 'Bijstandsgezin',
                'aantalVolwassenen' => 1,
                'aantalKinderen' => 0,
                'aantalBabys' => 2,
                'totaalAantalPersonen' => 3,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'naam' => 'DeJongGezin',
                'code' => 'G0005',
                'omschrijving' => 'Bijstandsgezin',
                'aantalVolwassenen' => 1,
                'aantalKinderen' => 1,
                'aantalBabys' => 0,
                'totaalAantalPersonen' => 2,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
            [
                'naam' => 'VanderBergGezin',
                'code' => 'G0006',
                'omschrijving' => 'AlleenGaande',
                'aantalVolwassenen' => 1,
                'aantalKinderen' => 0,
                'aantalBabys' => 0,
                'totaalAantalPersonen' => 1,
                'isActief' => true,
                'opmerkingen' => null,
                'created_at' => now()->micro(6),
                'updated_at' => now()->micro(6),
            ],
        ];

        foreach ($data as $item) {
            Gezin::create($item);
        }
    }
}
