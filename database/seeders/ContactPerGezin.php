<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactPerGezin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contactPerGezin = [
            ['gezinId' => 1, 'contactId' => 1],
            ['gezinId' => 2, 'contactId' => 2],
            ['gezinId' => 3, 'contactId' => 3],
            ['gezinId' => 4, 'contactId' => 4],
            ['gezinId' => 5, 'contactId' => 5],
            ['gezinId' => 6, 'contactId' => 6],
        ];

        DB::table('contactPerGezin')->insert($contactPerGezin);
    }
}
