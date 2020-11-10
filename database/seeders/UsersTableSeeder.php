<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [ 
            'name' => 'loulou',
            'email' => 'clement.charlemagne0@ynov.com',
            'password' => 'azerty0000000'
            ],[
            'name' => 'zaerty',
            'email' => 'clement.charlemagne1@ynov.com',
            'password' => 'azerty0000000'
            ],[
            'name' => 'JM',
            'email' => 'clement.charlemagne2@ynov.com',
            'password' => 'azerty0000000'
            ]
        ]);
    }
}
