<?php

use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        \App\Note::truncate();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 3; $i++) {
            \App\Note::create(['title' => $faker->sentence]);
        }
    }
}