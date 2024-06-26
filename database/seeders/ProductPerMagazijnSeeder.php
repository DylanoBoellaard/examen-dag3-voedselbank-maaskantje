<?php

namespace Database\Seeders;

use App\Models\ProductPerMagazijn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPerMagazijnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'ProductId' => 1,
                'MagazijnId' => 1,
                'Locatie' => 'Berlicum'
            ],
            [
                'ProductId' => 2,
                'MagazijnId' => 2,
                'Locatie' => 'Rosmalen'
            ],
            [
                'ProductId' => 3,
                'MagazijnId' => 3,
                'Locatie' => 'Berlicum'
            ],
            [
                'ProductId' => 4,
                'MagazijnId' => 4,
                'Locatie' => 'Berlicum'
            ],
            [
                'ProductId' => 5,
                'MagazijnId' => 5,
                'Locatie' => 'Rosmalen'
            ],
            [
                'ProductId' => 6,
                'MagazijnId' => 6,
                'Locatie' => 'Berlicum'
            ],
            [
                'ProductId' => 7,
                'MagazijnId' => 7,
                'Locatie' => 'Rosmalen'
            ],
            [
                'ProductId' => 8,
                'MagazijnId' => 8,
                'Locatie' => 'Sint-MichelsGestel'
            ],
            [
                'ProductId' => 9,
                'MagazijnId' => 9,
                'Locatie' => 'Sint-MichelsGestel'
            ],
            [
                'ProductId' => 10,
                'MagazijnId' => 10,
                'Locatie' => 'Middelrode'
            ],
            [
                'ProductId' => 11,
                'MagazijnId' => 11,
                'Locatie' => 'Middelrode'
            ],
            [
                'ProductId' => 12,
                'MagazijnId' => 12,
                'Locatie' => 'Middelrode'
            ],
            [
                'ProductId' => 13,
                'MagazijnId' => 13,
                'Locatie' => 'Schijndel'
            ],
            [
                'ProductId' => 14,
                'MagazijnId' => 14,
                'Locatie' => 'Schijndel'
            ],
            [
                'ProductId' => 15,
                'MagazijnId' => 15,
                'Locatie' => 'Gemonde'
            ],
            [
                'ProductId' => 16,
                'MagazijnId' => 16,
                'Locatie' => 'Gemonde'
            ],
            [
                'ProductId' => 17,
                'MagazijnId' => 17,
                'Locatie' => 'Gemonde'
            ],
            [
                'ProductId' => 18,
                'MagazijnId' => 18,
                'Locatie' => 'Gemonde'
            ],
            [
                'ProductId' => 19,
                'MagazijnId' => 19,
                'Locatie' => 'Den Bosch'
            ],
            [
                'ProductId' => 20,
                'MagazijnId' => 20,
                'Locatie' => 'Den Bosch'
            ],
            [
                'ProductId' => 21,
                'MagazijnId' => 21,
                'Locatie' => 'Den Bosch'
            ],
            [
                'ProductId' => 22,
                'MagazijnId' => 22,
                'Locatie' => 'Heeswijk Dinther'
            ],
            [
                'ProductId' => 23,
                'MagazijnId' => 23,
                'Locatie' => 'Heeswijk Dinther'
            ],
            [
                'ProductId' => 24,
                'MagazijnId' => 24,
                'Locatie' => 'Heeswijk Dinther'
            ],
            [
                'ProductId' => 25,
                'MagazijnId' => 25,
                'Locatie' => 'Vught'
            ],
            [
                'ProductId' => 26,
                'MagazijnId' => 26,
                'Locatie' => 'Vught'
            ],
            [
                'ProductId' => 27,
                'MagazijnId' => 27,
                'Locatie' => 'Vught'
            ],
            [
                'ProductId' => 28,
                'MagazijnId' => 28,
                'Locatie' => 'Vught'
            ],
            [
                'ProductId' => 29,
                'MagazijnId' => 29,
                'Locatie' => 'Vught'
            ],
        ];

        foreach ($data as $item) {
            ProductPerMagazijn::create($item);
        }
    }
}
