<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 5; $i++) {
            University::create([
                'user_id' => $i + 1,
                'field_id' => 1,
                'name' => 'Name Of The University',
                'faculty' => 'Name Of The Faculty',
                'major' => 'Name Of The Major',
                'entry_year' => 2020,
                'graduation_year' => 2024
            ]);
        }
        for($i = 0; $i < 5; $i++) {
            University::create([
                'user_id' => $i + 6,
                'field_id' => 2,
                'name' => 'Name Of The University',
                'faculty' => 'Name Of The Faculty',
                'major' => 'Name Of The Major',
                'entry_year' => 2020,
                'graduation_year' => 2024
            ]);
        }
        for($i = 0; $i < 5; $i++) {
            University::create([
                'user_id' => $i + 11,
                'field_id' => 3,
                'name' => 'Name Of The University',
                'faculty' => 'Name Of The Faculty',
                'major' => 'Name Of The Major',
                'entry_year' => 2020,
                'graduation_year' => 2024
            ]);
        }
    }
}
