<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i =0; $i < 10; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->randomElement(['Silver Arrow', 'Gold Arrow', 'Blue Arrow', 'Orange Arrow', 'White Arrow', 'Eggplant Arrow', 'Chicken Arrow']);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('now', '+2 hours')->format('Y-m-d H:i:s');
            $newTrain->arrival_time = $faker->dateTimeBetween('+3 hours', '+5 hours')->format('Y-m-d H:i:s');
            $newTrain->train_code = $faker->bothify('??-#######');
            $newTrain->carriages_number = $faker->numberBetween(1, 9999);
            $newTrain->on_time = $faker->randomElement([true, false]);
            $newTrain->cancelled = $faker->randomElement([true, false]);
            $newTrain->save();
        }





    }
}
