<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*   DB::table('cars')->insert([
             'make' => str_random(5),
             'model' => str_random(5),
             'year' => intval(2010),
         ]);
        */

       factory(App\Car::class, 1)->create()->each(function ($car) {
             // $u->posts()->save(factory(App\Post::class)->make());
         });

    }
}
