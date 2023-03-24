<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('caches')->insert([
            'title' => 'First cached text',
            'sub_title' => 'First subtitle text',
            'content' => 'Cache content'
        ]);
    }
}
