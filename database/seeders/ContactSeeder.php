<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'social_name' => 'Linkedin',
            'social_url' => 'https://www.linkedin.com/in/burak-gul1/',
        ]);
        Contact::create([
            'social_name' => 'Github',
            'social_url' => 'https://github.com/BurakGul1',
        ]);
        Contact::create([
            'social_name' => 'Instagram',
            'social_url' => 'https://instagram.com/burakgl_0?igshid=OGQ5ZDc2ODk2ZA==',
        ]);

    }
}
