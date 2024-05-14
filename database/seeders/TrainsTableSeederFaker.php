<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Generator as Faker;


class TrainsTableSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i ++){
            $new_train = new Train();
            $new_train->company = $faker->randomElement(['Italo', 'Trenitalia']);
            $new_train->ticket_number = $faker->randomNumber(9, true);
            $new_train->departure_station = $faker->words(2, true);
            $new_train->arrival_station = $faker->words(2, true);
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_number = $faker->randomNumber(6, true);
            $new_train->carriage_number = $faker->numberBetween(1, 15);
            dump($new_train);
        };
    }
}
