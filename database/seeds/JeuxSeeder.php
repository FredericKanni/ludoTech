<?php

use Illuminate\Database\Seeder;

class JeuxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jeux')->insert([
            'nom' => 'sonic' ,
            'editeur' => 'nintendo',
            'prix' => 24 ,
            'description' => "super jeu" ,
        ]);
    }
}


