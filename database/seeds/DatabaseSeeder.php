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

    }
}
