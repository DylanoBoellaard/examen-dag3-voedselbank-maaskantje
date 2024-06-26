<?php

namespace Database\Seeders;

use App\Models\Voedselpakket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoedselpakketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Updating new seed ...');

        Voedselpakket::create([
            'gezinId' => 1,
            'pakketnummer' => 1,
            'datumsamenstelling' => '2024-04-06',
            'datumuitgifte' => '2024-04-07',
            'status' => 'Uitgereikt',
        ]);

        Voedselpakket::create([
            'gezinId' => 1,
            'pakketnummer' => 2,
            'datumsamenstelling' => '2024-04-13',
            'datumuitgifte' => null,
            'status' => 'NietUitgereikt',
        ]);

        Voedselpakket::create([
            'gezinId' => 1,
            'pakketnummer' => 3,
            'datumsamenstelling' => '2024-04-20',
            'datumuitgifte' => null,
            'status' => 'NietMeerGegeven',
        ]);

        Voedselpakket::create([
            'gezinId' => 2,
            'pakketnummer' => 4,
            'datumsamenstelling' => '2024-04-06',
            'datumuitgifte' => '2024-04-07',
            'status' => 'Uitgereikt',
        ]);

        Voedselpakket::create([
            'gezinId' => 2,
            'pakketnummer' => 5,
            'datumsamenstelling' => '2024-04-13',
            'datumuitgifte' => '2024-04-14',
            'status' => 'Uitgereikt',
        ]);

        Voedselpakket::create([
            'gezinId' => 2,
            'pakketnummer' => 6,
            'datumsamenstelling' => '2024-04-20',
            'datumuitgifte' => null,
            'status' => 'NietUitgereikt',
        ]);

        $this->command->info('Voedselpakket completed');
    }
}
