<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Illuminate\Support\Facdes\DB;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class student_detaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('student_detail')->insert([
                        'Father_name'=>str::random(10),
            'Mother_name'=>str::random(10)
        ]);
    }
}
