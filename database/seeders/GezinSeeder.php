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
        $this->command->info('Updating new seed ...');

        Gezin::create([
            'naam' => 'ZevenhuizenGezin',
            'code' => 'G0001',
            'omschrijving' => 'Bijstandsgezin',
            'aantalvolwassenen' => 2,
            'aantalkinderen' => 2,
            'aantalbabys' => 0,
            'totaalpersonen' => 4,
        ]);

        Gezin::create([
            'naam' => 'BergkampGezin',
            'code' => 'G0002',
            'omschrijving' => 'Bijstandsgezin',
            'aantalvolwassenen' => 2,
            'aantalkinderen' => 1,
            'aantalbabys' => 1,
            'totaalpersonen' => 4,
        ]);

        Gezin::create([
            'naam' => 'HeuvelGezin',
            'code' => 'G0003',
            'omschrijving' => 'Bijstandsgezin',
            'aantalvolwassenen' => 2,
            'aantalkinderen' => 0,
            'aantalbabys' => 0,
            'totaalpersonen' => 2,
        ]);

        Gezin::create([
            'naam' => 'ScherderGezin',
            'code' => 'G0004',
            'omschrijving' => 'Bijstandsgezin',
            'aantalvolwassenen' => 1,
            'aantalkinderen' => 0,
            'aantalbabys' => 2,
            'totaalpersonen' => 3,
        ]);

        Gezin::create([
            'naam' => 'DeJongGezin',
            'code' => 'G0005',
            'omschrijving' => 'Bijstandsgezin',
            'aantalvolwassenen' => 1,
            'aantalkinderen' => 1,
            'aantalbabys' => 0,
            'totaalpersonen' => 2,
        ]);

        Gezin::create([
            'naam' => 'VanderBergGezin',
            'code' => 'G0006',
            'omschrijving' => 'AlleenGaande',
            'aantalvolwassenen' => 1,
            'aantalkinderen' => 0,
            'aantalbabys' => 0,
            'totaalpersonen' => 1,
        ]);

        $this->command->info('Gezin completed');
    }
}
