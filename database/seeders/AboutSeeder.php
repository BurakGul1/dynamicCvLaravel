<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name' => 'Burak GÜL',
            'phone_number' => '+90 544 321 48 56',
            'email'=>'burakgl2465@gmail.com',
            'website'=>'www.burakgul.com',
            'address'=>'Türkiye, Gaziantep'
        ]);
    }
}
