<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('board')->insert([
            [ 
            'title' => 'super board de la mort qui tue 0 !',
            'description' => 'super description de la mort qui tue de la super board de la mort qui tue 0 !'
            ],[
            'title' => 'super board de la mort qui tue 1 !',
            'description' => 'super description de la mort qui tue de la super board de la mort qui tue 1 !'
            ],[
            'title' => 'super board de la mort qui tue 2 !',
            'description' => 'super description de la mort qui tue de la super board de la mort qui tue 2 !'
            ]
        ]);
    }
}
