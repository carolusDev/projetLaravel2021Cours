<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('task')->insert([
            [ 
            'title' => 'titre 0',
            'description' => 'une petite description',
            'due_date' => 'un jour',
            'state' => 'done'
            ],[
            'title' => 'titre 1',
            'description' => 'une petite description',
            'due_date' => 'un jour',
            'state' => 'in progress'
            ],[
            'title' => 'titre 0',
            'description' => 'une petite description',
            'due_date' => 'un jour',
            'state' => 'done'
            ]
        ]);
    }
}
