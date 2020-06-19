<?php

use Illuminate\Database\Seeder;
use App\Documentary;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class DocumentariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Data quantity
        $records = 10;

        // For loop to generate fake data
        for ($i = 0; $i < $records; $i++){ 
            $newDocumentary = new Documentary();
            $uppercasedTitle = Str::ucfirst($faker->words(3, true));

            $newDocumentary->title = $uppercasedTitle;
            $newDocumentary->description = $faker->paragraph(3, false);
            $newDocumentary->release_date = $faker->date('Y-m-d', 'now');

            $newDocumentary->save();
        }
    }
}
