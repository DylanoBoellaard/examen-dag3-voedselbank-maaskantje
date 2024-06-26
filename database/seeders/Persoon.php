<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Persoon extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $persoon = [
            ['gezinId' => null, 'voornaam' => 'Hans', 'tussenvoegsel' => 'van', 'achternaam' => 'Leeuwen', 'geboortedatum' => '1958-02-12', 'typePersoon' => 'Manager', 'isVertegenwoordiger' => false],
            ['gezinId' => null, 'voornaam' => 'Jan', 'tussenvoegsel' => 'van der', 'achternaam' => 'Sluijs', 'geboortedatum' => '1993-04-30', 'typePersoon' => 'Medewerker', 'isVertegenwoordiger' => false],
            ['gezinId' => null, 'voornaam' => 'Herman', 'tussenvoegsel' => 'den', 'achternaam' => 'Duiker', 'geboortedatum' => '1989-08-30', 'typePersoon' => 'Vrijwilliger', 'isVertegenwoordiger' => false],
            ['gezinId' => 1, 'voornaam' => 'Johan', 'tussenvoegsel' => 'van', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '1990-05-20', 'typePersoon' => 'Klant', 'isVertegenwoordiger' => true],
            ['gezinId' => 1, 'voornaam' => 'Sarah', 'tussenvoegsel' => 'den', 'achternaam' => 'Dolder', 'geboortedatum' => '1985-03-23', 'typePersoon' => 'Klant', 'isVertegenwoordiger' => false],
            ['gezinId' => 1, 'voornaam' => 'Theo', 'tussenvoegsel' => 'van', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '2015-03-08', 'typePersoon' => 'Klant', 'isVertegenwoordiger' => false],
            ['gezinId' => 1, 'voornaam' => 'Jantien', 'tussenvoegsel' => 'van', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '2016-09-20', 'typePersoon' => 'Klant', 'isVertegenwoordiger' => false],
            ['gezinId' => 2, 'voornaam' => 'Arjan', 'tussenvoegsel' => null, 'achternaam' => 'Bergkamp', 'geboortedatum' => '1968-07-12', 'typePersoon' => 'Klant', 'isVertegenwoordiger' => true],
            ['gezinId' => 2, 'voornaam' => 'Janneke', 'tussenvoegsel' => null, 'achternaam' => 'Sanders', 'geboortedatum' => '1969-05-11', 'typePersoon' => 'Klant', 'isVertegenwoordiger' => false],
            ['gezinId' => 2, 'voornaam' => 'Stein', 'tussenvoegsel' => null, 'achternaam' => 'Bergkamp', 'geboortedatum' => '2009-02-02', 'typePersoon' => 'Klant', 'isVertegenwoordiger' => false],
            ['gezinId' => 2, 'voornaam' => 'Judith', 'tussenvoegsel' => null, 'achternaam' => 'Bergkamp', 'geboortedatum' => '2022-02-05', 'typePersoon' => 'Klant', 'isVertegenwoordiger' => false],
            ['gezinId' => 3, 'voornaam' => 'Mazin', 'tussenvoegsel' => 'van', 'achternaam' => 'Vliet', 'geboortedatum' => '1968-08-18', 'typePersoon' => 'Klant', 'isVertegenwoordiger' => false],
            ['gezinId' => 3, 'voornaam' => 'Selma', 'tussenvoegsel' => 'van de', 'achternaam' => 'Heuvel', 'geboortedatum' => '1965-09-04', 'typePersoon' => 'Klant', 'isVertegenwoordiger' => true],
            ['gezinId' => 4, 'voornaam' => 'Eva', 'tussenvoegsel' => null, 'achternaam' => 'Scherder', 'geboortedatum' => '2000-04-07', 'typePersoon' => 'Klant', 'isVertegenwoordiger' => true],
            ['gezinId' => 4, 'voornaam' => 'Felicia', 'tussenvoegsel' => null, 'achternaam' => 'Scherder', 'geboortedatum' => '2021-11-29', 'typePersoon' => 'Klant', 'isVertegenwoordiger' => false],
            ['gezinId' => 4, 'voornaam' => 'Devin', 'tussenvoegsel' => null, 'achternaam' => 'Scherder', 'geboortedatum' => '2024-03-01', 'typePersoon' => 'Klant', 'isVertegenwoordiger' => false],
            ['gezinId' => 5, 'voornaam' => 'Frieda', 'tussenvoegsel' => 'de', 'achternaam' => 'Jong', 'geboortedatum' => '1980-09-04', 'typePersoon' => 'Klant', 'isVertegenwoordiger' => true],
            ['gezinId' => 5, 'voornaam' => 'Simeon', 'tussenvoegsel' => 'de', 'achternaam' => 'Jong', 'geboortedatum' => '2018-05-23', 'typePersoon' => 'Klant', 'isVertegenwoordiger' => false],
            ['gezinId' => 6, 'voornaam' => 'Hanna', 'tussenvoegsel' => 'van der', 'achternaam' => 'Berg', 'geboortedatum' => '1999-09-09', 'typePersoon' => 'Klant', 'isVertegenwoordiger' => true],
        ];

        DB::table('persoon')->insert($persoon);
    }
}
