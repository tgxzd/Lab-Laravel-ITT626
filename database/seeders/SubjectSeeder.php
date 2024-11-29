<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject_seed = [
            ['subject_code' => '100', 'subject_name' => 'Monday' , 'lecturer_name' => 'abu'],
            ['subject_code' => '200', 'subject_name' => 'Tuesday', 'lecturer_name' => 'aizad'],
            ['subject_code' => '300', 'subject_name' => 'Wednesday' , 'lecturer_name' => 'ahmad'],
            ['subject_code' => '400', 'subject_name' => 'Thursday', 'lecturer_name' => 'ronaldo'],
            ['subject_code' => '500', 'subject_name' => 'Friday' , 'lecturer_name' => 'messi'],
            ['subject_code' => '600', 'subject_name' => 'Saturday', 'lecturer_name' => 'pogba'],
            ['subject_code' => '700', 'subject_name' => 'Sunday' , 'lecturer_name' => 'tengku'],
        ];



        foreach ($subject_seed as $subject){
            Subject::firstOrCreate($subject);

        }
    }
}
