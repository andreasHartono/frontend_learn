<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('movies')->insert([
         'judul' => 'Thor Love Thunder',
         'date' => '22-09-2022',
         'score' => 9.5,
         'sinopsis' => 'Thor love and thunder',
         'serial' => 'yes'
      ]);
      DB::table('movies')->insert([
         'judul' => 'One Piece',
         'date' => '23-09-2022',
         'score' => 9,
         'sinopsis' => 'One Piece',
         'serial' => 'no'
      ]);
    }
}
