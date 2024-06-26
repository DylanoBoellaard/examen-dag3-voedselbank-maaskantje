<?php

namespace Database\Seeders;

use App\Models\Persoon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Updating new seed ...');

        Persoon::create([
            'gezin_id' => null,
            'voornaam' => 'Hans',
            'tussenvoegsel' => 'van',
            'achternaam' => 'Leeuwen',
            'geboortedatum' => '1958-02-12',
            'typepersoon' => 'Manager',
            'isvertegenwoordiger' => 0,
        ]);

        Persoon::create([
            'gezin_id' => null,
            'voornaam' => 'Jan',
            'tussenvoegsel' => 'van der',
            'achternaam' => 'Sluijs',
            'geboortedatum' => '1993-04-30',
            'typepersoon' => 'Medewerker',
            'isvertegenwoordiger' => 0,
        ]);

        Persoon::create([
            'gezin_id' => null,
            'voornaam' => 'Herman',
            'tussenvoegsel' => 'den',
            'achternaam' => 'Duiker',
            'geboortedatum' => '1989-08-30',
            'typepersoon' => 'Vrijwilliger',
            'isvertegenwoordiger' => 0,
        ]);

        Persoon::create([
            'gezin_id' => 1,
            'voornaam' => 'Johan',
            'tussenvoegsel' => 'van',
            'achternaam' => 'Zevenhuizen',
            'geboortedatum' => '1990-05-20',
            'typepersoon' => 'Klant',
            'isvertegenwoordiger' => 1,
        ]);

        Persoon::create([
            'gezin_id' => 1,
            'voornaam' => 'Sarah',
            'tussenvoegsel' => 'den',
            'achternaam' => 'Dolder',
            'geboortedatum' => '1985-03-23',
            'typepersoon' => 'Klant',
            'isvertegenwoordiger' => 0,
        ]);

        Persoon::create([
            'gezin_id' => 1,
            'voornaam' => 'Theo',
            'tussenvoegsel' => 'van',
            'achternaam' => 'Zevenhuizen',
            'geboortedatum' => '2015-03-08',
            'typepersoon' => 'Klant',
            'isvertegenwoordiger' => 0,
        ]);

        Persoon::create([
            'gezin_id' => 1,
            'voornaam' => 'Jantien',
            'tussenvoegsel' => 'van',
            'achternaam' => 'Zevenhuizen',
            'geboortedatum' => '2016-09-20',
            'typepersoon' => 'Klant',
            'isvertegenwoordiger' => 0,
        ]);

        Persoon::create([
            'gezin_id' => 2,
            'voornaam' => 'Arjan',
            'tussenvoegsel' => null,
            'achternaam' => 'Bergkamp',
            'geboortedatum' => '1968-07-12',
            'typepersoon' => 'Klant',
            'isvertegenwoordiger' => 1,
        ]);

        Persoon::create([
            'gezin_id' => 2,
            'voornaam' => 'Janneke',
            'tussenvoegsel' => null,
            'achternaam' => 'Sanders',
            'geboortedatum' => '1969-05-11',
            'typepersoon' => 'Klant',
            'isvertegenwoordiger' => 0,
        ]);

        Persoon::create([
            'gezin_id' => 2,
            'voornaam' => 'Stein',
            'tussenvoegsel' => null,
            'achternaam' => 'Bergkamp',
            'geboortedatum' => '2009-02-02',
            'typepersoon' => 'Klant',
            'isvertegenwoordiger' => 0,
        ]);

        Persoon::create([
            'gezin_id' => 2,
            'voornaam' => 'Judith',
            'tussenvoegsel' => null,
            'achternaam' => 'Bergkamp',
            'geboortedatum' => '2022-02-05',
            'typepersoon' => 'Klant',
            'isvertegenwoordiger' => 0,
        ]);

        Persoon::create([
            'gezin_id' => 3,
            'voornaam' => 'Mazin',
            'tussenvoegsel' => 'van',
            'achternaam' => 'Vliet',
            'geboortedatum' => '1968-08-18',
            'typepersoon' => 'Klant',
            'isvertegenwoordiger' => 0,
        ]);

        Persoon::create([
            'gezin_id' => 3,
            'voornaam' => 'Selma',
            'tussenvoegsel' => 'van de',
            'achternaam' => 'Heuvel',
            'geboortedatum' => '1965-09-04',
            'typepersoon' => 'Klant',
            'isvertegenwoordiger' => 1,
        ]);

        Persoon::create([
            'gezin_id' => 4,
            'voornaam' => 'Eva',
            'tussenvoegsel' => null,
            'achternaam' => 'Scherder',
            'geboortedatum' => '2000-04-07',
            'typepersoon' => 'Klant',
            'isvertegenwoordiger' => 1,
        ]);

        Persoon::create([
            'gezin_id' => 4,
            'voornaam' => 'Felicia',
            'tussenvoegsel' => null,
            'achternaam' => 'Scherder',
            'geboortedatum' => '2021-11-29',
            'typepersoon' => 'Klant',
            'isvertegenwoordiger' => 0,
        ]);

        Persoon::create([
            'gezin_id' => 4,
            'voornaam' => 'Devin',
            'tussenvoegsel' => null,
            'achternaam' => 'Scherder',
            'geboortedatum' => '2024-03-01',
            'typepersoon' => 'Klant',
            'isvertegenwoordiger' => 0,
        ]);

        Persoon::create([
            'gezin_id' => 5,
            'voornaam' => 'Frieda',
            'tussenvoegsel' => 'de',
            'achternaam' => 'Jong',
            'geboortedatum' => '1980-09-04',
            'typepersoon' => 'Klant',
            'isvertegenwoordiger' => 1,
        ]);

        Persoon::create([
            'gezin_id' => 5,
            'voornaam' => 'Simeon',
            'tussenvoegsel' => 'de',
            'achternaam' => 'Jong',
            'geboortedatum' => '2018-05-23',
            'typepersoon' => 'Klant',
            'isvertegenwoordiger' => 0,
        ]);

        Persoon::create([
            'gezin_id' => 6,
            'voornaam' => 'Hanna',
            'tussenvoegsel' => 'de',
            'achternaam' => 'Berg',
            'geboortedatum' => '1999-09-09',
            'typepersoon' => 'Klant',
            'isvertegenwoordiger' => 1,
        ]);

        $this->command->info('Persoon completed');
    }
}
