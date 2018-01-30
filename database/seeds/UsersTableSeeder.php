<?php

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
          DB::table('users')->insert([
            'name' => 'fercho9212',
            'email' => 'fercho9212@gmail.com',
            'password' => bcrypt('FERfer123.'),
        ]);
    }
}
