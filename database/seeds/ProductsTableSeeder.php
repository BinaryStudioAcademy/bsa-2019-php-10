<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first();

        DB::table('products')->insert([
            'name'      => 'Apple MacBook',
            'price'     => '1999.99',
            'user_id'   => $user->id
        ]);
        DB::table('products')->insert([
            'name'  => 'Apple iPhone',
            'price' => '999.99',
            'user_id'   => $user->id
        ]);
        DB::table('products')->insert([
            'name'  => 'Apple iPad',
            'price' => '499.99',
            'user_id'   => $user->id
        ]);
        DB::table('products')->insert([
            'name'  => 'Apple Watch',
            'price' => '299.99',
            'user_id'   => $user->id
        ]);
        DB::table('products')->insert([
            'name'  => 'Apple Airpods',
            'price' => '99.99',
            'user_id'   => $user->id
        ]);
    }
}
