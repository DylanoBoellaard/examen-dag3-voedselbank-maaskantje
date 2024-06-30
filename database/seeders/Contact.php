<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Contact extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contact = [
            ['straat' => 'Prins Irenestraat', 'huisnummer' => '12', 'toevoeging' => 'A', 'postcode' => '5271TH', 'woonplaats' => 'Maaskantje', 'email' => 'j.van.zevenhuizen@gmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Gibraltarstraat', 'huisnummer' => '234', 'toevoeging' => null, 'postcode' => '5271TJ', 'woonplaats' => 'Maaskantje', 'email' => 'a.bergkamp@hotmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Der Kinderenstraat', 'huisnummer' => '456', 'toevoeging' => 'Bis', 'postcode' => '5271TH', 'woonplaats' => 'Maaskantje', 'email' => 's.van.de.heuvel@gmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Nachtegaalstraat', 'huisnummer' => '233', 'toevoeging' => 'A', 'postcode' => '5271TJ', 'woonplaats' => 'Maaskantje', 'email' => 'e.scherder@gmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Bertram Russellstraat', 'huisnummer' => '45', 'toevoeging' => null, 'postcode' => '5271TH', 'woonplaats' => 'Maaskantje', 'email' => 'f.de.jong@hotmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Leonardo Da VinchiHof', 'huisnummer' => '34', 'toevoeging' => null, 'postcode' => '5271ZE', 'woonplaats' => 'Maaskantje', 'email' => 'h.van.der.berg@gmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Siegfried Knutsenlaan', 'huisnummer' => '234', 'toevoeging' => null, 'postcode' => '5271ZE', 'woonplaats' => 'Maaskantje', 'email' => 'r.ter.weijden@ah.nl', 'mobiel' => '+31 623456123'],
            ['straat' => 'Theo de Bokstraat', 'huisnummer' => '256', 'toevoeging' => null, 'postcode' => '5271ZH', 'woonplaats' => 'Maaskantje', 'email' => 'l.pastoor@gmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Meester van Leerhof', 'huisnummer' => '2', 'toevoeging' => 'A', 'postcode' => '5271ZH', 'woonplaats' => 'Maaskantje', 'email' => 'm.yazzidi@gemeenteutrecht.nl', 'mobiel' => '+31 623456123'],
            ['straat' => 'Van Wemelenplatsoen', 'huisnummer' => '300', 'toevoeging' => null, 'postcode' => '5271TH', 'woonplaats' => 'Maaskantje', 'email' => 'b.van.driel@gmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Terlingenhof', 'huisnummer' => '20', 'toevoeging' => null, 'postcode' => '5271TH', 'woonplaats' => 'Maaskantje', 'email' => 'j.pastorium@gmail.com', 'mobiel' => '+31 623456356'],
            ['straat' => 'Veldhoen', 'huisnummer' => '31', 'toevoeging' => null, 'postcode' => '5271ZE', 'woonplaats' => 'Maaskantje', 'email' => 's.dollaard@gmail.com', 'mobiel' => '+31 623452314'],
            ['straat' => 'ScheringaDreef', 'huisnummer' => '37', 'toevoeging' => null, 'postcode' => '5271ZE', 'woonplaats' => 'Vught', 'email' => 'j.blokker@gemeentevught.nl', 'mobiel' => '+31 623452314'],
        ];

        DB::table('contact')->insert($contact);
    }
}
