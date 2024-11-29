<?php

namespace Database\Seeders;

use App\Models\Day;
use App\Models\Group;
use App\Models\Subject;
use App\Models\Hall;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        $this->call(DaySeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(HallSeeder::class);
    }
}
