<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class UserSeeder extends Seeder
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
            'name' => 'Jane Doe',
            'email' => 'janedoe1@gmail.com',
            'password' => '12345',
            'created_at' => Carbon::now()
        ]);
    }
}
