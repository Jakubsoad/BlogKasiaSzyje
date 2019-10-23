<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<=25000;$i++) {
            $rand = rand(0, 2);
            $categories = ['idea', 'sewing', 'upholstery'];
            DB::table('posts')->insert([
                'title' => substr(file_get_contents('https://loripsum.net/api/1'), 60, 25),
                'content' => file_get_contents('https://loripsum.net/api/10/medium/plaintext'),
                'category' => $categories[$rand],
                'created_at' => new DateTime('-'. rand(0,1000) .' days -'.rand(0,24).' hours')
            ]);
        }
    }
}
