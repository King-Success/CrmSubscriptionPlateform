<?php

use App\Subscriber;
use Illuminate\Database\Seeder;

class SubscribersTableSeeder extends Seeder
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
            Subscriber::create([
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'email' => $faker->unique()->email,
                'company' => $faker->unique()->company,
                'address_1' => $faker->address,
                'address_2' => $faker->address,
                'city' => $faker->city,
//                'region' => $faker->unique()->numberBetween($min = 1, $max = 50),
                'postal_code' => $faker->postcode,
                'country' => $faker->country,

            ]);
        }
    }
}
