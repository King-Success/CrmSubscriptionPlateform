<?php

use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 4; $i++) {
            App\User::create([
                'name' => $faker->name,
                'amount' => $faker->email
            ]);
        }
    }
}
