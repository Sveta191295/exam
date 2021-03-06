<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'body' =>Str::random(100), 
            'comments'=>Str::random(50),

        ]);
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'body' =>Str::random(100),  
            'comments'=>Str::random(50),
        ]);
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'body' =>Str::random(100),  
            'comments'=>Str::random(50),
        ]);
    }
}
