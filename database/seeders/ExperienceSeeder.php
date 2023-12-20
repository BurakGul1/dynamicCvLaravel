<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobStart1 = date('Y-m-d', strtotime('03-07-2021'));
        $jobEnd1 = date('Y-m-d', strtotime('05-01-2022'));
        $jobStart2 = date('Y-m-d', strtotime('03-07-2023'));
        $jobEnd2 = date('Y-m-d', strtotime('05-01-2024'));
        Experience::create([
            'job_start'=> $jobStart1,
            'job_finish'=> $jobEnd1,
            'company_name'=>'Rotatelab A.Ş.',
            'job_description'=>'Oyun alanında kendini aşmış bir şirket.'
        ]);
        Experience::create([
            'job_start'=> $jobStart2,
            'job_finish'=> $jobEnd2,
            'company_name'=>'Gaziantep Bilişim A.Ş.',
            'job_description'=>'Web, mobil ve oyun alanlarında başarılı bir şirket.'
        ]);
    }
}
