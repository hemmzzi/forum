<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'Hermann Snorri Hermannsson',
            'email' => 'hemmzzi@gmail.com',
            'password' => bcrypt('password'),
            ]);
         DB::table('threads')->insert([
         	['title' => 'Titill A', 'body' => 'Body fyrir titill A', 'user_id' => 1],
         	['title' => 'Titill B', 'body' => 'Body fyrir titill B', 'user_id' => 1],
         	['title' => 'Titill C', 'body' => 'Body fyrir titill C', 'user_id' => 1],
         	['title' => 'Titill D', 'body' => 'Body fyrir titill D', 'user_id' => 1],
         	['title' => 'Titill E', 'body' => 'Body fyrir titill E', 'user_id' => 1]

         	]);

    }
}
