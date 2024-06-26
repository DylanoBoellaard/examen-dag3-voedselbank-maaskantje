<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'CategorieId' => 1,
                'Naam' => 'Aardappel',
                'SoortAllergie' => null,
                'Barcode' => '8719587321239',
                'Houdbaarheidsdatum' => '2024-07-12',
                'Omschrijving' => 'Kruimige Aardappel',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 1,
                'Naam' => 'Aardappel',
                'SoortAllergie' => null,
                'Barcode' => '8719587321239',
                'Houdbaarheidsdatum' => '2024-07-26',
                'Omschrijving' => 'Kruimige Aardappel',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 1,
                'Naam' => 'Ui',
                'SoortAllergie' => null,
                'Barcode' => '8719437321335',
                'Houdbaarheidsdatum' => '2024-09-02',
                'Omschrijving' => 'Gele ui',
                'Status' => 'NietOpVoorraad'
            ],
            [
                'CategorieId' => 1,
                'Naam' => 'Appel',
                'SoortAllergie' => null,
                'Barcode' => '8719486321332',
                'Houdbaarheidsdatum' => '2024-08-16',
                'Omschrijving' => 'Granny smith',
                'Status' => 'NietLeverbaar'
            ],
            [
                'CategorieId' => 1,
                'Naam' => 'Appel',
                'SoortAllergie' => null,
                'Barcode' => '8719486321332',
                'Houdbaarheidsdatum' => '2024-09-23',
                'Omschrijving' => 'Granny smith',
                'Status' => 'NietLeverbaar'
            ],
            [
                'CategorieId' => 1,
                'Naam' => 'Banaan',
                'SoortAllergie' => 'Banaan',
                'Barcode' => '8719484321336',
                'Houdbaarheidsdatum' => '2024-07-12',
                'Omschrijving' => 'Biologische Banaan',
                'Status' => 'OverHoudbaarheidsDatum'
            ],
            [
                'CategorieId' => 1,
                'Naam' => 'Banaan',
                'SoortAllergie' => 'Banaan',
                'Barcode' => '8719484321336',
                'Houdbaarheidsdatum' => '2024-07-19',
                'Omschrijving' => 'Biologische Banaan',
                'Status' => 'OverHoudbaarheidsDatum'
            ],
            [
                'CategorieId' => 2,
                'Naam' => 'Kaas',
                'SoortAllergie' => 'Lactose',
                'Barcode' => '8719487421338',
                'Houdbaarheidsdatum' => '2024-09-19',
                'Omschrijving' => 'Jonge Kaas',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 2,
                'Naam' => 'Rosbief',
                'SoortAllergie' => null,
                'Barcode' => '8719487421331',
                'Houdbaarheidsdatum' => '2024-07-23',
                'Omschrijving' => 'Rundvlees',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 3,
                'Naam' => 'Melk',
                'SoortAllergie' => 'Lactose',
                'Barcode' => '8719447321332',
                'Houdbaarheidsdatum' => '2024-07-23',
                'Omschrijving' => 'Halfvolle melk',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 3,
                'Naam' => 'Magarine',
                'SoortAllergie' => null,
                'Barcode' => '8719486321336',
                'Houdbaarheidsdatum' => '2024-08-02',
                'Omschrijving' => 'Plantaardige boter',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 3,
                'Naam' => 'Ei',
                'SoortAllergie' => 'Eier',
                'Barcode' => '8719487421334',
                'Houdbaarheidsdatum' => '2024-08-04',
                'Omschrijving' => 'Scharrelei',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 4,
                'Naam' => 'Brood',
                'SoortAllergie' => 'Gluten',
                'Barcode' => '8719487721337',
                'Houdbaarheidsdatum' => '2024-07-07',
                'Omschrijving' => 'Volkoren brood',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 4,
                'Naam' => 'Gevulde Koek',
                'SoortAllergie' => 'Amandel',
                'Barcode' => '8719483321333',
                'Houdbaarheidsdatum' => '2024-09-04',
                'Omschrijving' => 'Banketbakkers kwaliteit',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 5,
                'Naam' => 'Fristi',
                'SoortAllergie' => 'Lactose',
                'Barcode' => '8719487121331',
                'Houdbaarheidsdatum' => '2024-10-28',
                'Omschrijving' => 'Frisdrank',
                'Status' => 'NietOpVoorraad'
            ],
            [
                'CategorieId' => 5,
                'Naam' => 'Appelsap',
                'SoortAllergie' => null,
                'Barcode' => '8719487521335',
                'Houdbaarheidsdatum' => '2024-10-19',
                'Omschrijving' => '100% vruchtensap',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 5,
                'Naam' => 'Koffie',
                'SoortAllergie' => 'Caffeïne',
                'Barcode' => '8719487381338',
                'Houdbaarheidsdatum' => '2024-10-23',
                'Omschrijving' => 'Arabica koffie',
                'Status' => 'OverHoudbaarheidsDatum'
            ],
            [
                'CategorieId' => 5,
                'Naam' => 'Thee',
                'SoortAllergie' => 'Theïne',
                'Barcode' => '8719487329339',
                'Houdbaarheidsdatum' => '2024-09-02',
                'Omschrijving' => 'Ceylon thee',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 6,
                'Naam' => 'Pasta',
                'SoortAllergie' => 'Gluten',
                'Barcode' => '8719487321334',
                'Houdbaarheidsdatum' => '2024-12-16',
                'Omschrijving' => 'Macaroni',
                'Status' => 'NietLeverbaar'
            ],
            [
                'CategorieId' => 6,
                'Naam' => 'Rijst',
                'SoortAllergie' => null,
                'Barcode' => '8719487331332',
                'Houdbaarheidsdatum' => '2024-12-25',
                'Omschrijving' => 'Basmati Rijst',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 6,
                'Naam' => 'Knorr Nasi Mix',
                'SoortAllergie' => null,
                'Barcode' => '871948735135',
                'Houdbaarheidsdatum' => '2024-12-13',
                'Omschrijving' => 'Nasi kruiden',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 7,
                'Naam' => 'Tomatensoep',
                'SoortAllergie' => null,
                'Barcode' => '8719487371337',
                'Houdbaarheidsdatum' => '2024-12-23',
                'Omschrijving' => 'Romige tomatensoep',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 7,
                'Naam' => 'Tomatensaus',
                'SoortAllergie' => null,
                'Barcode' => '8719487341334',
                'Houdbaarheidsdatum' => '2024-12-21',
                'Omschrijving' => 'Pizza saus',
                'Status' => 'NietOpVoorraad'
            ],
            [
                'CategorieId' => 7,
                'Naam' => 'Peterselie',
                'SoortAllergie' => null,
                'Barcode' => '8719487321636',
                'Houdbaarheidsdatum' => '2024-07-31',
                'Omschrijving' => 'Verse kruidenpot',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 8,
                'Naam' => 'Olie',
                'SoortAllergie' => null,
                'Barcode' => '8719487327337',
                'Houdbaarheidsdatum' => '2024-12-27',
                'Omschrijving' => 'Olijfolie',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 8,
                'Naam' => 'Mars',
                'SoortAllergie' => null,
                'Barcode' => '8719487324334',
                'Houdbaarheidsdatum' => '2024-12-11',
                'Omschrijving' => 'Snoep',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 8,
                'Naam' => 'Biscuit',
                'SoortAllergie' => null,
                'Barcode' => '8719487311331',
                'Houdbaarheidsdatum' => '2024-08-07',
                'Omschrijving' => 'San Francisco biscuit',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 8,
                'Naam' => 'Paprika Chips',
                'SoortAllergie' => null,
                'Barcode' => '87194873218398',
                'Houdbaarheidsdatum' => '2024-12-22',
                'Omschrijving' => 'Ribbelchips paprika',
                'Status' => 'OpVoorraad'
            ],
            [
                'CategorieId' => 8,
                'Naam' => 'Chocolade reep',
                'SoortAllergie' => 'Cacoa',
                'Barcode' => '8719487321533',
                'Houdbaarheidsdatum' => '2024-11-21',
                'Omschrijving' => 'Tony Chocolonely',
                'Status' => 'OpVoorraad'
            ],
        ];

        foreach ($data as $item) {
            Product::create($item);
        }
    }
}
