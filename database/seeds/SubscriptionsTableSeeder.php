<?php

use App\Subscription;
use Illuminate\Database\Seeder;

class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 30; $i++) {
            Subscription::create([
                'plan_id' => $faker->numberBetween($min = 1, $max = 4),
                'subscriber_id' => $faker->unique()->numberBetween($min = 1, $max = 50),
                'active' => $faker->boolean($chanceOfGettingTrue = 50)
            ]);
        }
    }
}

