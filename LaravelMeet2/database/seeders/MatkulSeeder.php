<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MatkulSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('matkul')->insert([
            'matkul' => Str::random(10),
            'sks' => random_int(1,10)
        ]);
    }
}
