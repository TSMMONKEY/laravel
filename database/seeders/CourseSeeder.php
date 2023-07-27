<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Courses;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            'name' => Str::random(4),
            'description' => Str::random(30),
            'created_by' => Str::random(10),
        ]);
        
        DB::table('courses')->insert([
            'name' => Str::random(4),
            'description' => Str::random(30),
            'created_by' => Str::random(10),
        ]);
        
        DB::table('courses')->insert([
            'name' => Str::random(4),
            'description' => Str::random(30),
            'created_by' => Str::random(10),
        ]);
        
        DB::table('courses')->insert([
            'name' => Str::random(4),
            'description' => Str::random(30),
            'created_by' => Str::random(10),
        ]);
        
        DB::table('courses')->insert([
            'name' => Str::random(4),
            'description' => Str::random(30),
            'created_by' => Str::random(10),
        ]);
    }
}
