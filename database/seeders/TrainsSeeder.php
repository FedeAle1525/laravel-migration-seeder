<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {

            $newTrain = new Train();
            $newTrain->company = $faker->randomElement(['Trenitalia', 'Trenord', 'Italo']);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_date = $faker->dateTimeThisMonth();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->code = $faker->bothify('??? ######');
            $newTrain->number_of_carriage = $faker->numberBetween(5, 15);
            $newTrain->in_time = $faker->randomElement([0, 1]);
            $newTrain->deleted = $faker->randomElement([0, 1]);

            $newTrain->save();
        }
    }
}
