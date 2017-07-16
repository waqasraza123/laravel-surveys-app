<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('secret'),
                'role' => 'advisor',
                'company_position' => 'bla bla',
                'status' => true,
                'mobile_number' => $faker->phoneNumber,
                'firm_code' => 'F3331',

                'remember_token' => str_random(10),
	        ]);
        }
    }
}
