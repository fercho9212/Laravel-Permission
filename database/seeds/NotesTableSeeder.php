<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert([
            'title' => 'Note 21313',
            'content' => 'It s a test for bd ',
        ]);
        DB::table('notes')->insert([
            'title' => 'note for 4',
            'content' => 'jajajajajajjad',
        ]);
        DB::table('notes')->insert([
            'title' => 'note 3',
            'content' => 'pero que ',
        ]);
    }
}
