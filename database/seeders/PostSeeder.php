<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('post')->insert([
            'title' => 'First Blog',
            'description' => 'Sample description',
            'published_post' => 1,
            'created_at' => Carbon::now()
        ],
        [
            'title' => 'test',
            'description' => 'Sample test',
            'published_post' => 2,
            'created_at' => Carbon::now()
        ]);
    }
}
