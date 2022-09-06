<?php

namespace Database\Seeders;

use App\Models\Generation;
use Illuminate\Database\Seeder;

class GenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Generation::create([
            'name' => 'Elysium Saars',
            'number' => 1,
        ]);
        Generation::create([
            'name' => 'Fradella Elfareth',
            'number' => 2,
        ]);
        Generation::create([
            'name' => 'La Scienza Guardie',
            'number' => 3,
        ]);
        Generation::create([
            'name' => 'Estrellas De Quatro',
            'number' => 4,
        ]);
    }
}
