<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Gezin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gezin = [
            ['naam' => 'ZevenhuizenGezin', 'code' => 'G0001', 'omschrijving' => 'Bijstandsgezin', 'aantalVolwassenen' => 2, 'aantalKinderen' => 2, 'aantalBabys' => 0, 'totaalAantalPersonen' => 4],
            ['naam' => 'BergkampGezin', 'code' => 'G0002', 'omschrijving' => 'Bijstandsgezin', 'aantalVolwassenen' => 2, 'aantalKinderen' => 1, 'aantalBabys' => 1, 'totaalAantalPersonen' => 4],
            ['naam' => 'HeuvelGezin', 'code' => 'G0003', 'omschrijving' => 'Bijstandsgezin', 'aantalVolwassenen' => 2, 'aantalKinderen' => 0, 'aantalBabys' => 0, 'totaalAantalPersonen' => 2],
            ['naam' => 'ScherderGezin', 'code' => 'G0004', 'omschrijving' => 'Bijstandsgezin', 'aantalVolwassenen' => 1, 'aantalKinderen' => 0, 'aantalBabys' => 2, 'totaalAantalPersonen' => 3],
            ['naam' => 'DeJongGezin', 'code' => 'G0005', 'omschrijving' => 'Bijstandsgezin', 'aantalVolwassenen' => 1, 'aantalKinderen' => 1, 'aantalBabys' => 0, 'totaalAantalPersonen' => 2],
            ['naam' => 'VanderBergGezin', 'code' => 'G0006', 'omschrijving' => 'AlleenGaande', 'aantalVolwassenen' => 1, 'aantalKinderen' => 0, 'aantalBabys' => 0, 'totaalAantalPersonen' => 1],
        ];

        DB::table('gezin')->insert($gezin);
    }
}
