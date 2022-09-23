<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      DB::table('images')->insert([
         'extension' => 'jpg',
         'movie_id' => 1
      ]);
      DB::table('images')->insert([
         'extension' => 'png',
         'movie_id' => 2
      ]);
   }
}
