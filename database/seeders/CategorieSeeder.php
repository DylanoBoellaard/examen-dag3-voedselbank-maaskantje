<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'Naam' => 'AGF',
                'Omschrijving' => 'Aardappelen groente en fruit'
            ],
            [
                'Naam' => 'KV',
                'Omschrijving' => 'Kaas en vleeswaren'
            ],
            [
                'Naam' => 'ZPE',
                'Omschrijving' => 'Zuivel plantaardig en eieren'
            ],
            [
                'Naam' => 'BB',
                'Omschrijving' => 'Bakkerij en Banket'
            ],
            [
                'Naam' => 'FSKT',
                'Omschrijving' => 'Frisdranken, sappen, koffie en thee'
            ],
            [
                'Naam' => 'PRW',
                'Omschrijving' => 'Pasta, rijst en wereldkeuken'
            ],
            [
                'Naam' => 'SSKO',
                'Omschrijving' => 'Soepen, sauzen,kruiden en olie'
            ],
            [
                'Naam' => 'SKCC',
                'Omschrijving' => 'Snoep, koek, chips en chocolade'
            ],
            [
                'Naam' => 'BVH',
                'Omschrijving' => 'Baby, verzorging en hygiëne'
            ],
        ];

        foreach ($data as $item) {
            Categorie::create($item);
        }
    }
}
