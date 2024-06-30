<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //seeder for product
        $data = [
            [
                'id' => 1,
                'categorieid' => 1,
                'naam' => 'aardappel',
                'soortallergie' => 'null',
                'barcode' => '8719587321239',
                'houdbaarheidsdatum' => '2024-07-12',
                'omschrijving' => 'kruimige aardappel',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 2,
                'categorieid' => 1,
                'naam' => 'aardappel',
                'soortallergie' => 'null',
                'barcode' => '8719587321238',
                'houdbaarheidsdatum' => '2024-07-26',
                'omschrijving' => 'kruimige aardappel',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 3,
                'categorieid' => 1,
                'naam' => 'ui',
                'soortallergie' => 'null',
                'barcode' => '8719487321336',
                'houdbaarheidsdatum' => '2024-09-09',
                'omschrijving' => 'gele ui',
                'status' => 'nietopvoorraad'
            ],
            [
                'id' => 4,
                'categorieid' => 1,
                'naam' => 'appel',
                'soortallergie' => 'null',
                'barcode' => '8719486321332',
                'houdbaarheidsdatum' => '2024-08-16',
                'omschrijving' => 'granny smith',
                'status' => 'nietleverbaar'
            ],
            [
                'id' => 5,
                'categorieid' => 1,
                'naam' => 'appel',
                'soortallergie' => 'null',
                'barcode' => '8719486321332',
                'houdbaarheidsdatum' => '2024-08-16',
                'omschrijving' => 'granny smith',
                'status' => 'nietleverbaar'
            ],
            [
                'id' => 6,
                'categorieid' => 1,
                'naam' => 'banaan',
                'soortallergie' => 'banaan',
                'barcode' => '8719484321338',
                'houdbaarheidsdatum' => '2024-07-12',
                'omschrijving' => 'biologische banaan',
                'status' => 'overhoudbaarheidsdatum'
            ],
            [
                'id' => 7,
                'categorieid' => 1,
                'naam' => 'banaan',
                'soortallergie' => 'banaan',
                'barcode' => '8719484321338',
                'houdbaarheidsdatum' => '2024-07-19',
                'omschrijving' => 'biologische banaan',
                'status' => 'overhoudbaarheidsdatum'
            ],
            [
                'id' => 8,
                'categorieid' => 2,
                'naam' => 'kaas',
                'soortallergie' => 'lactose',
                'barcode' => '8719487321338',
                'houdbaarheidsdatum' => '2024-07-19',
                'omschrijving' => 'jonge kaas',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 9,
                'categorieid' => 2,
                'naam' => 'rosbief',
                'soortallergie' => 'null',
                'barcode' => '8719487421331',
                'houdbaarheidsdatum' => '2024-07-23',
                'omschrijving' => 'rundvlees',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 10,
                'categorieid' => 3,
                'naam' => 'melk',
                'soortallergie' => 'lactose',
                'barcode' => '8719486321332',
                'houdbaarheidsdatum' => '2024-08-06',
                'omschrijving' => 'halfvolle melk',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 11,
                'categorieid' => 3,
                'naam' => 'margarine',
                'soortallergie' => 'null',
                'barcode' => '8719486321336',
                'houdbaarheidsdatum' => '2024-07-23',
                'omschrijving' => 'plantaardige boter',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 12,
                'categorieid' => 3,
                'naam' => 'ei',
                'soortallergie' => 'eier',
                'barcode' => '8719487421334',
                'houdbaarheidsdatum' => '2024-08-04',
                'omschrijving' => 'scharrelei',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 13,
                'categorieid' => 4,
                'naam' => 'brood',
                'soortallergie' => 'gluten',
                'barcode' => '8719487421333',
                'houdbaarheidsdatum' => '2024-07-07',
                'omschrijving' => 'volkoren brood',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 14,
                'categorieid' => 4,
                'naam' => 'gevulde koek',
                'soortallergie' => 'amandel',
                'barcode' => '8719487321337',
                'houdbaarheidsdatum' => '2024-08-23',
                'omschrijving' => 'banketbakkers kwaliteit',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 15,
                'categorieid' => 5,
                'naam' => 'fristi',
                'soortallergie' => 'lactose',
                'barcode' => '8719487321331',
                'houdbaarheidsdatum' => '2024-10-28',
                'omschrijving' => 'frisdrank',
                'status' => 'nietopvoorraad'
            ],
            [
                'id' => 16,
                'categorieid' => 5,
                'naam' => 'appelsap',
                'soortallergie' => 'null',
                'barcode' => '8719487521335',
                'houdbaarheidsdatum' => '2024-10-19',
                'omschrijving' => '100% vruchtensap',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 17,
                'categorieid' => 5,
                'naam' => 'koffie',
                'soortallergie' => 'caffeïne',
                'barcode' => '8719487321336',
                'houdbaarheidsdatum' => '2024-06-19',
                'omschrijving' => 'arabica koffie',
                'status' => 'overhoudbaarheidsdatum'
            ],
            [
                'id' => 18,
                'categorieid' => 5,
                'naam' => 'thee',
                'soortallergie' => 'theïne',
                'barcode' => '8719487329393',
                'houdbaarheidsdatum' => '2024-09-06',
                'omschrijving' => 'ceylon thee',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 19,
                'categorieid' => 6,
                'naam' => 'pasta',
                'soortallergie' => 'gluten',
                'barcode' => '8719487321334',
                'houdbaarheidsdatum' => '2024-12-16',
                'omschrijving' => 'macaroni',
                'status' => 'nietleverbaar'
            ],
            [
                'id' => 20,
                'categorieid' => 6,
                'naam' => 'rijst',
                'soortallergie' => 'null',
                'barcode' => '8719487321332',
                'houdbaarheidsdatum' => '2024-12-25',
                'omschrijving' => 'basmati rijst',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 21,
                'categorieid' => 6,
                'naam' => 'knorr nasi mix',
                'soortallergie' => 'null',
                'barcode' => '8719487371332',
                'houdbaarheidsdatum' => '2024-12-28',
                'omschrijving' => 'nasi kruiden',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 22,
                'categorieid' => 7,
                'naam' => 'tomatensoep',
                'soortallergie' => 'null',
                'barcode' => '8719487321337',
                'houdbaarheidsdatum' => '2024-12-27',
                'omschrijving' => 'romige tomatensoep',
                'status' => 'opvoorraad'
            ],
            [


                'id' => 23,
                'categorieid' => 7,
                'naam' => 'tomatensaus',
                'soortallergie' => 'null',
                'barcode' => '8719487327373',
                'houdbaarheidsdatum' => '2024-12-23',
                'omschrijving' => 'pizza saus',
                'status' => 'nietopvoorraad'
            ],
            [
                'id' => 24,
                'categorieid' => 7,
                'naam' => 'peterselie',
                'soortallergie' => 'null',
                'barcode' => '8719487341334',
                'houdbaarheidsdatum' => '2024-12-21',
                'omschrijving' => 'verse kruidenpot',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 25,
                'categorieid' => 7,
                'naam' => 'olie',
                'soortallergie' => 'null',
                'barcode' => '8719487321636',
                'houdbaarheidsdatum' => '2024-07-31',
                'omschrijving' => 'olijfolie',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 26,
                'categorieid' => 8,
                'naam' => 'mars',
                'soortallergie' => 'null',
                'barcode' => '8719487327337',
                'houdbaarheidsdatum' => '2024-12-27',
                'omschrijving' => 'snoep',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 27,
                'categorieid' => 8,
                'naam' => 'biscuit',
                'soortallergie' => 'null',
                'barcode' => '8719487323345',
                'houdbaarheidsdatum' => '2024-07-06',
                'omschrijving' => 'san francisco biscuit',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 28,
                'categorieid' => 8,
                'naam' => 'paprika chips',
                'soortallergie' => 'null',
                'barcode' => '8719487321838',
                'houdbaarheidsdatum' => '2024-12-22',
                'omschrijving' => 'ribbelchips paprika',
                'status' => 'opvoorraad'
            ],
            [
                'id' => 29,
                'categorieid' => 8,
                'naam' => 'chocolade reep',
                'soortallergie' => 'cacao',
                'barcode' => '8719487321533',
                'houdbaarheidsdatum' => '2024-11-21',
                'omschrijving' => 'tony chocolonely',
                'status' => 'opvoorraad'
            ]
        ];
        foreach ($data as $row) {
            Product::create($row);
        }
    }
}
