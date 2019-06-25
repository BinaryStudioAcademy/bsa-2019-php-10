<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

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

        DB::table('users')->insert([
            'name'      => 'admin',
            'email'     => 'admin@example.com',
            'password'  => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name'      => $faker->name,
            'email'     => $faker->email,
            'password'  => bcrypt($faker->word)
        ]);
    }
}
