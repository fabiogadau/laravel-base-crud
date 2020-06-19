<?php

use Illuminate\Database\Seeder;
use App\Director;
use Faker\Generator as Faker;

class DirectorsTableSeeder extends Seeder
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
            $newDirector = new Director();

            $newDirector->full_name = $faker->name('male'|'female');
            $newDirector->nationality = $faker->state;
            $newDirector->number_movies = $faker->numberBetween(1, 30);

            $newDirector->save();
        }
    }
}
