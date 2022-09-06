<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'generation_id' => 3,
            'email' => 'lanasaiful411@gmail.com',
            'password' => 'pass',
            'fullname' => 'Lana Saiful Aqil',
            'bio' => 'bodoamat njir',
            'whatsapp' => '085800669010',
            'instagram' => 'lazaaq',
            'berkuliah' => true,
            'bekerja' => false,
        ]);
    }
}
