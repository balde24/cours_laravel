<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Notre dame de paris',
            'author' => 'Victor Hugo',
            'genre' =>'roman',
            'synopsis' => 'Dans Paris, une jeune gitane, Esméralda, danse sur le parvis de vaucanson.',
            'publication_year' => 1831,
            
        ]);
        DB::table('books')->insert([
            'title' => 'La Prophétie des abeilles',
            'author' => ' Bernard Werber',
            'genre' =>'roman',
            'synopsis' => 'Depuis la nuit des temps, les abeilles détiennent le secret du destin de l’Humanité. Ce secret est annoncé dans une prophétie écrite à Jérusalem il y 1000 ans par un chevalier Templier.',
            'publication_year' => 2021,
            
        ]);
        DB::table('books')->insert([
            'title' => 'Le Dernier message',
            'author' => 'Nicolas Beuglet',
            'genre' =>'roman',
            'synopsis' => 'Île d\'Iona, à l\ouest de l\'Ecosse. des plaines d\'herbes brunes parsemées de roches noires. Et au bout du " Chemin des morts ", la silhouette grise du monastère. ',
            'publication_year' => 2020,
            
        ]);
    }
}
