<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comments')->insert([
            [ 
            'text' => 'azerty 0',
            ],[
            'text' => 'azerty 1',
            ],[
            'text' => 'azerty 2',
            ]
        ]);
    }
}
