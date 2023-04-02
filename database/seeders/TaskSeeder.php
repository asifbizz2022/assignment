<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() :void
    {   
        for($i=1; $i<=50; $i++){
            DB::table('tasks')->insert([
                'title' => 'Title'.rand(111,999),
                'description' => 'Desc_Lorem Ipsum is simply dummy text of the printing and typesetting industry'.rand(111,999),
                 
            ]);
        }
    }
}
