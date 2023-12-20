<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skills::create([
            'name'=>'HTML',
            'skills_percent'=>'%75'
        ]);
        Skills::create([
            'name'=>'CSS',
            'skills_percent'=>'%70'
        ]);
        Skills::create([
            'name'=>'JS',
            'skills_percent'=>'%40'
        ]);Skills::create([
            'name'=>'LARAVEL',
            'skills_percent'=>'%50'
        ]);Skills::create([
            'name'=>'UNITY',
            'skills_percent'=>'%75'
        ]);Skills::create([
            'name'=>'C#',
            'skills_percent'=>'%75'
        ]);
    }
}
