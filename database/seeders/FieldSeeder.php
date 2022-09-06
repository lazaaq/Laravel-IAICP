<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Field::create([
            'name' => 'Pendidikan',
            'description' => 'pendidikan description'
        ]);
        Field::create([
            'name' => 'Kesehatan',
            'description' => 'kesehatan description'
        ]);
        Field::create([
            'name' => 'Teknik',
            'description' => 'teknik description'
        ]);
    }
}
