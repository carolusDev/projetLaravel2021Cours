<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttachmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('attachments')->insert([
            [ 
            'file' => 'file0',
            'filename' => 'file0name',
            'size' => '12',
            'type' => 'document'
            ],[
            'file' => 'file1',
            'filename' => 'file1name',
            'size' => '12',
            'type' => 'document'
            ],[
            'file' => 'file2',
            'filename' => 'file2name',
            'size' => '12',
            'type' => 'document'
            ]
        ]);
    }
}
