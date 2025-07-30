<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 20; $i++) {

            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->departure_date = $faker->dateTimeInInterval('now', '+5 days')->format('Y-m-d');
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time('H:i:s');
            $newTrain->arrival_time = $faker->time('H:i:s', '+10 hours');
            $newTrain->train_number = $faker->numerify('####');
            $newTrain->total_carriages = $faker->numberBetween(7, 14);
            $newTrain->on_time = $faker->boolean();
            $newTrain->canceled = $faker->boolean();

            $newTrain->save();
        }
    }
}
