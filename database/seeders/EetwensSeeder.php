<?php

namespace Database\Seeders;

use App\Models\Eetwens;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EetwensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Updating new seed ...');

        Eetwens::create([
            'naam' => 'GeenVarken',
            'omschrijving' => 'Geen Varkensvlees',
        ]);

        Eetwens::create([
            'naam' => 'Veganistisch',
            'omschrijving' => 'Geen Zuivelproducten en vlees',
        ]);

        Eetwens::create([
            'naam' => 'Vegatarisch',
            'omschrijving' => 'Geen vlees',
        ]);

        Eetwens::create([
            'naam' => 'Omnivoor',
            'omschrijving' => 'Geen beperkingen',
        ]);

        $this->command->info('Eetwens completed');
    }
}
