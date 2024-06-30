<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ContactPerLeverancier;

class ContactPerLeverancierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'id' => 1,
                'leverancierid' => 1,
                'contactid' => 7,
            ],
            [
                'id' => 2,
                'leverancierid' => 2,
                'contactid' => 8,
            ],
            [
                'id' => 3,
                'leverancierid' => 3,
                'contactid' => 9,
            ],
            [
                'id' => 4,
                'leverancierid' => 4,
                'contactid' => 10,
            ],
            [
                'id' => 5,
                'leverancierid' => 6,
                'contactid' => 11,
            ],
            [
                'id' => 6,
                'leverancierid' => 7,
                'contactid' => 12,
            ],
            [
                'id' => 7,
                'leverancierid' => 8,
                'contactid' => 13,
            ]
        ];
        foreach ($data as $row) {
            ContactPerLeverancier::create($row);
        }
    }
}
