<?php

use Illuminate\Database\Seeder;

class SubDomainsTableSeeder extends Seeder
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
            App\User::create([
                'sub_domain' => $faker->domainWord,
                'subscriber_id' => $faker->unique()->numberBetween($min = 1, $max = 50)
            ]);
        }
    }
}
