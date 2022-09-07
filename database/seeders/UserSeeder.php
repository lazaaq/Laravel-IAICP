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
            'username' => 'lazaaq',
            'email' => 'lanasaiful411@gmail.com' ,
            'password' => 'pass',
            'fullname' => 'Lana Saiful Aqil',
            'bio' => 'bodoamat',
            'whatsapp' => '085800669010',
            'instagram' => 'lazaaq',
            'berkuliah' => true,
            'bekerja' => false,
        ]);
        for($i = 0; $i < 15; $i++) {
            User::create([
                'generation_id' => random_int(1, 4),
                'username' => 'username' . $i,
                'email' => 'email' . $i . '@gmail.com' ,
                'password' => 'pass',
                'fullname' => 'User ' . $i,
                'bio' => 'my bio',
                'whatsapp' => '085800669010',
                'instagram' => 'instagram' . $i,
                'berkuliah' => true,
                'bekerja' => false,
            ]);
        }
    }
}
