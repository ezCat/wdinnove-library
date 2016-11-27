<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
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
			    'first_name' => $faker->name,
			    'last_name' => $faker->name,
			    'email' => $faker->email,
			    'password' => bcrypt('secret'),
			    'is_admin' => 0,
			]);

			DB::table('gyms')->insert([
			    'name' => $faker->cityPrefix,
			    'adress' => $faker->streetAddress,
			    'location' => $faker->city,
			]);

			DB::table('players')->insert([
			    'first_name' => $faker->name,
			    'last_name' => $faker->name,
			    'birth_date' =>  $faker->dateTimeThisCentury->format('Y-m-d'),
			    'position' => 'MJ',
			    'experience' => $faker->randomDigit,
			]);

			DB::table('clubs')->insert([
			    'name' => $faker->word,
			    'main_color' => $faker->hexcolor,
			    'gym_id' => $index,
			]);

			DB::table('categories')->insert([
			    'name' => "U1".$index,
			]);

			DB::table('teams')->insert([
			    'name' => $faker->company,
			    'club_id' => $index,
			    'category_id' => $index,
			]);

			DB::table('users_teams')->insert([
			    'user_id' => $index,
			    'team_id' => $index,
			]);

			DB::table('teams_players')->insert([
			    'team_id' => $index,
			    'player_id' => $index,
			]);
	}

    }
}
