<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'title' => 'Funny Post',
            'content' => 'This is funny content',
            'category_id' => 1,
        ]);
        DB::table('post')->insert([
            'title' => 'Another Funny Post',
            'content' => 'This is another funny content',
            'category_id' => 1,
        ]);
        DB::table('post')->insert([
            'title' => 'Educational Post',
            'content' => 'This is educationa content',
            'category_id' => 2,
        ]);
        DB::table('post')->insert([
            'title' => 'Another Educational Post',
            'content' => 'This is another educational content',
            'category_id' => 2,
        ]);
    }
}
