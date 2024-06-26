<?php

namespace Database\Seeders;

use App\Models\Magazijn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MagazijnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'Ontvangstdatum' => '2024-05-12',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '5 kg',
                'Aantal' => 20,
            ],
            [
                'Ontvangstdatum' => '2024-05-26',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '2.5 kg',
                'Aantal' => 40,
            ],
            [
                'Ontvangstdatum' => '2024-04-02',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '1 kg',
                'Aantal' => 30,
            ],
            [
                'Ontvangstdatum' => '2024-05-16',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '1.5 kg',
                'Aantal' => 25,
            ],
            [
                'Ontvangstdatum' => '2024-05-23',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '4 stuks',
                'Aantal' => 75,
            ],
            [
                'Ontvangstdatum' => '2024-03-12',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '1 kg/tros',
                'Aantal' => 60,
            ],
            [
                'Ontvangstdatum' => '2024-03-19',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '2 kg/tros',
                'Aantal' => 200,
            ],
            [
                'Ontvangstdatum' => '2024-06-19',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '200 g',
                'Aantal' => 45,
            ],
            [
                'Ontvangstdatum' => '2024-07-23',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '100 g',
                'Aantal' => 60,
            ],
            [
                'Ontvangstdatum' => '2024-07-23',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '1 liter',
                'Aantal' => 120,
            ],
            [
                'Ontvangstdatum' => '2024-06-02',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '250 g',
                'Aantal' => 80,
            ],
            [
                'Ontvangstdatum' => '2024-01-04',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '6 stuks',
                'Aantal' => 120,
            ],
            [
                'Ontvangstdatum' => '2024-04-07',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '800 g',
                'Aantal' => 220,
            ],
            [
                'Ontvangstdatum' => '2024-04-04',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '1 stuk',
                'Aantal' => 130,
            ],
            [
                'Ontvangstdatum' => '2024-04-28',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '150 ml',
                'Aantal' => 72,
            ],
            [
                'Ontvangstdatum' => '2024-04-19',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '1 l',
                'Aantal' => 12,
            ],
            [
                'Ontvangstdatum' => '2024-04-23',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '250 g',
                'Aantal' => 300,
            ],
            [
                'Ontvangstdatum' => '2024-03-02',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '25 zakjes',
                'Aantal' => 280,
            ],
            [
                'Ontvangstdatum' => '2024-04-16',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '500 g',
                'Aantal' => 330,
            ],
            [
                'Ontvangstdatum' => '2024-04-25',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '1 kg',
                'Aantal' => 34,
            ],
            [
                'Ontvangstdatum' => '2024-04-13',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '50 g',
                'Aantal' => 23,
            ],
            [
                'Ontvangstdatum' => '2024-04-23',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '1 l',
                'Aantal' => 46,
            ],
            [
                'Ontvangstdatum' => '2024-04-21',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '250 ml',
                'Aantal' => 98,
            ],
            [
                'Ontvangstdatum' => '2024-04-30',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '1 potje',
                'Aantal' => 56,
            ],
            [
                'Ontvangstdatum' => '2024-04-27',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '1 l',
                'Aantal' => 210,
            ],
            [
                'Ontvangstdatum' => '2024-04-01',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '4 stuks',
                'Aantal' => 24,
            ],
            [
                'Ontvangstdatum' => '2024-04-07',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '300 g',
                'Aantal' => 87,
            ],
            [
                'Ontvangstdatum' => '2024-04-22',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '200 g',
                'Aantal' => 230,
            ],
            [
                'Ontvangstdatum' => '2024-04-21',
                'Uitleveringsdatum' => null,
                'VerpakkingsEenheid' => '80 g',
                'Aantal' => 30,
            ],
        ];

        foreach ($data as $item) {
            Magazijn::create($item);
        }
    }
}
