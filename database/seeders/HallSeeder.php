<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hall;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $hall_seed = [
            ['id' => '1', 'lecture_hall_name' => 'hall1','lecture_hall_place' => 'place1', ],
            ['id' => '2', 'lecture_hall_name' => 'hall2',  'lecture_hall_place' => 'place2'],
            ['id' => '3', 'lecture_hall_name' => 'hall3',  'lecture_hall_place' => 'place3'],
            ['id' => '4', 'lecture_hall_name' => 'hall4',  'lecture_hall_place' => 'place4'],
            ['id' => '5', 'lecture_hall_name' => 'hall5',  'lecture_hall_place' => 'place5'],
            ['id' => '6', 'lecture_hall_name' => 'hall6',  'lecture_hall_place' => 'place6'],
            ['id' => '7', 'lecture_hall_name' => 'hall7', 'lecture_hall_place' => 'place7'],
        ];


        foreach ($hall_seed as $hall){
            Hall::firstOrCreate($hall);
        }
        
    }
}


