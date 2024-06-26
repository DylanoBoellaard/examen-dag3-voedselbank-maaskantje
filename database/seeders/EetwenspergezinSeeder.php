<?php

namespace Database\Seeders;

use App\Models\Eetwenspergezin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EetwenspergezinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Updating new seed ...');

        Eetwenspergezin::create([
            'gezinId' => 1,
            'eetwensId'=> 2,
        ]);

        Eetwenspergezin::create([
            'gezinId' => 2,
            'eetwensId'=> 4,
        ]);

        Eetwenspergezin::create([
            'gezinId' => 3,
            'eetwensId'=> 4,
        ]);

        Eetwenspergezin::create([
            'gezinId' => 4,
            'eetwensId'=> 3,
        ]);

        Eetwenspergezin::create([
            'gezinId' => 5,
            'eetwensId'=> 2,
        ]);

        $this->command->info('Eetwenspergezin completed');
    }
}
