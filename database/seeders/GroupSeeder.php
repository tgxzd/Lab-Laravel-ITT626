<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $group_seed = [
            ['id' => '1', 'name' => 'Abu' , 'part' => '1'],
            ['id' => '2', 'name' => 'Tuesday', 'part' => '2'],
            ['id' => '3', 'name' => 'Wednesday' , 'part' => '3'],
            ['id' => '4', 'name' => 'Thursday' , 'part' => '4'],
            ['id' => '5', 'name' => 'Friday' , 'part' => '3'],
            ['id' => '6', 'name' => 'Saturday' , 'part' => '2'],
            ['id' => '7', 'name' => 'Sunday' , 'part' => '5'],


        ];

        foreach ($group_seed as $group) {
            Group::firstOrCreate($group);
        }
    }
}
