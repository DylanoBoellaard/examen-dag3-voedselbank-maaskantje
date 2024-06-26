<?php

namespace Database\Seeders;

use App\Models\Productpervoedselpakket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductpeprvoedselpakketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Updating new seed ...');

        Productpervoedselpakket::create([
            'voedselpakketId' => 1,
            'productId' => 7,
            'aantalproducteneenheden' => 1,
        ]);

        Productpervoedselpakket::create([
            'voedselpakketId' => 1,
            'productId' => 8,
            'aantalproducteneenheden' => 2,
        ]);

        Productpervoedselpakket::create([
            'voedselpakketId' => 1,
            'productId' => 9,
            'aantalproducteneenheden' => 1,
        ]);

        Productpervoedselpakket::create([
            'voedselpakketId' => 2,
            'productId' => 12,
            'aantalproducteneenheden' => 1,
        ]);

        Productpervoedselpakket::create([
            'voedselpakketId' => 2,
            'productId' => 13,
            'aantalproducteneenheden' => 2,
        ]);

        Productpervoedselpakket::create([
            'voedselpakketId' => 2,
            'productId' => 14,
            'aantalproducteneenheden' => 1,
        ]);

        Productpervoedselpakket::create([
            'voedselpakketId' => 3,
            'productId' => 3,
            'aantalproducteneenheden' => 1,
        ]);

        Productpervoedselpakket::create([
            'voedselpakketId' => 3,
            'productId' => 4,
            'aantalproducteneenheden' => 1,
        ]);

        Productpervoedselpakket::create([
            'voedselpakketId' => 4,
            'productId' => 20,
            'aantalproducteneenheden' => 1,
        ]);

        Productpervoedselpakket::create([
            'voedselpakketId' => 4,
            'productId' => 19,
            'aantalproducteneenheden' => 1,
        ]);

        Productpervoedselpakket::create([
            'voedselpakketId' => 4,
            'productId' => 21,
            'aantalproducteneenheden' => 1,
        ]);

        Productpervoedselpakket::create([
            'voedselpakketId' => 5,
            'productId' => 24,
            'aantalproducteneenheden' => 1,
        ]);

        Productpervoedselpakket::create([
            'voedselpakketId' => 5,
            'productId' => 25,
            'aantalproducteneenheden' => 1,
        ]);

        Productpervoedselpakket::create([
            'voedselpakketId' => 5,
            'productId' => 26,
            'aantalproducteneenheden' => 1,
        ]);

        Productpervoedselpakket::create([
            'voedselpakketId' => 5,
            'productId' => 26,
            'aantalproducteneenheden' => 1,
        ]);

        $this->command->info('Productpervoedselpakket completed');
    }
}
