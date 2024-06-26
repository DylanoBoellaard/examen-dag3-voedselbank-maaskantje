<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ProductPerLeverancier;

class ProductPerLeverancierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creating seeding for table productperleverancier
        $data = [
            [
                'id' => 1,
                'leverancierid' => 4,
                'productid' => 1,
                'datumaangeleverd' => '2024-04-12',
                'datumeerstvolgendelevering' => '2024-05-12'
            ],
            [
                'id' => 2,
                'leverancierid' => 4,
                'productid' => 2,
                'datumaangeleverd' => '2024-03-02',
                'datumeerstvolgendelevering' => '2024-04-02'
            ],
            [
                'id' => 3,
                'leverancierid' => 2,
                'productid' => 3,
                'datumaangeleverd' => '2024-07-16',
                'datumeerstvolgendelevering' => '2024-08-16'
            ],
            [
                'id' => 4,
                'leverancierid' => 1,
                'productid' => 4,
                'datumaangeleverd' => '2024-02-12',
                'datumeerstvolgendelevering' => '2024-03-12'
            ],
            [
                'id' => 5,
                'leverancierid' => 4,
                'productid' => 5,
                'datumaangeleverd' => '2024-05-19',
                'datumeerstvolgendelevering' => '2024-06-19'
            ],
            [
                'id' => 6,
                'leverancierid' => 1,
                'productid' => 6,
                'datumaangeleverd' => '2024-06-23',
                'datumeerstvolgendelevering' => '2024-07-23'
            ],
            [
                'id' => 7,
                'leverancierid' => 4,
                'productid' => 7,
                'datumaangeleverd' => '2024-06-20',
                'datumeerstvolgendelevering' => '2024-07-20'
            ],
            [
                'id' => 8,
                'leverancierid' => 4,
                'productid' => 8,
                'datumaangeleverd' => '2024-05-02',
                'datumeerstvolgendelevering' => '2024-06-02'
            ],
            [
                'id' => 9,
                'leverancierid' => 4,
                'productid' => 9,
                'datumaangeleverd' => '2022-12-04',
                'datumeerstvolgendelevering' => '2024-01-04'
            ],
            [
                'id' => 10,
                'leverancierid' => 3,
                'productid' => 10,
                'datumaangeleverd' => '2024-03-07',
                'datumeerstvolgendelevering' => '2024-04-07'
            ],
            [
                'id' => 11,
                'leverancierid' => 3,
                'productid' => 11,
                'datumaangeleverd' => '2024-02-04',
                'datumeerstvolgendelevering' => '2024-03-04'
            ],
            [
                'id' => 12,
                'leverancierid' => 3,
                'productid' => 12,
                'datumaangeleverd' => '2024-02-28',
                'datumeerstvolgendelevering' => '2024-03-28'
            ],
            [
                'id' => 13,
                'leverancierid' => 2,
                'productid' => 13,
                'datumaangeleverd' => '2024-03-19',
                'datumeerstvolgendelevering' => '2024-04-19'
            ],
            [
                'id' => 14,
                'leverancierid' => 2,
                'productid' => 14,
                'datumaangeleverd' => '2024-03-23',
                'datumeerstvolgendelevering' => '2024-04-23'
            ],
            [
                'id' => 15,
                'leverancierid' => 2,
                'productid' => 15,
                'datumaangeleverd' => '2024-02-02',
                'datumeerstvolgendelevering' => '2024-03-02'
            ],
            [
                'id' => 16,
                'leverancierid' => 1,
                'productid' => 16,
                'datumaangeleverd' => '2024-02-16',
                'datumeerstvolgendelevering' => '2024-03-16'
            ],
            [
                'id' => 17,
                'leverancierid' => 1,
                'productid' => 17,
                'datumaangeleverd' => '2024-03-25',
                'datumeerstvolgendelevering' => '2024-04-25'
            ],
            [
                'id' => 18,
                'leverancierid' => 2,
                'productid' => 18,
                'datumaangeleverd' => '2024-03-13',
                'datumeerstvolgendelevering' => '2024-04-13'
            ],
            [
                'id' => 19,
                'leverancierid' => 1,
                'productid' => 19,
                'datumaangeleverd' => '2024-03-23',
                'datumeerstvolgendelevering' => '2024-04-23'
            ],
            [
                'id' => 20,
                'leverancierid' => 4,
                'productid' => 20,
                'datumaangeleverd' => '2024-02-21',
                'datumeerstvolgendelevering' => '2024-03-21'
            ],
            [
                'id' => 21,
                'leverancierid' => 2,
                'productid' => 21,
                'datumaangeleverd' => '2024-03-31',
                'datumeerstvolgendelevering' => '2024-04-30'
            ],
            [
                'id' => 22,
                'leverancierid' => 2,
                'productid' => 22,
                'datumaangeleverd' => '2024-03-27',
                'datumeerstvolgendelevering' => '2024-04-27'
            ],
            [
                'id' => 23,
                'leverancierid' => 3,
                'productid' => 23,
                'datumaangeleverd' => '2024-04-11',
                'datumeerstvolgendelevering' => '2024-04-18'
            ],
            [
                'id' => 24,
                'leverancierid' => 2,
                'productid' => 24,
                'datumaangeleverd' => '2024-04-07',
                'datumeerstvolgendelevering' => '2024-04-14'
            ],
            [
                'id' => 25,
                'leverancierid' => 1,
                'productid' => 25,
                'datumaangeleverd' => '2024-05-07',
                'datumeerstvolgendelevering' => '2024-05-14'
            ],
            [
                'id' => 26,
                'leverancierid' => 2,
                'productid' => 26,
                'datumaangeleverd' => '2024-05-05',
                'datumeerstvolgendelevering' => '2024-05-12'
            ]
        ];
        foreach ($data as $row) {
            ProductPerLeverancier::create($row);
        }
    }
}
