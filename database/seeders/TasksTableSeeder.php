<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tasks')->insert([
            [ 
            'title' => 'titre 0',
            'description' => 'une petite description',
            'due_date' => '2020/10/20',
            'state' => 'done'
            ],[
            'title' => 'titre 1',
            'description' => 'une petite description',
            'due_date' => '2020/10/20',
            'state' => 'in progress'
            ],[
            'title' => 'titre 0',
            'description' => 'une petite description', 
            'due_date' => '2020/10/20',
            'state' => 'done'
            ]
        ]);
    }
}
