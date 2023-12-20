<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $startDate1 = date('Y-m-d', strtotime('01-09-2015'));
        $endDate1 = date('Y-m-d', strtotime('15-07-2019'));

        $startDate2 = date('Y-m-d', strtotime('01-09-2020'));
        $endDate2 = date('Y-m-d', strtotime('15-07-2024'));
        Education::create([
            'start_edu' => $startDate1,
            'end_edu' => $endDate1,
            'school_name'=>'Mustafa Gürbüz Necat Bayel Anadolu Lisesi',
            'school_description'=>'Yabancıl Dil Ağırlıklı Anadolu Lisesi'
        ]);
        Education::create([
            'start_edu' => $startDate2,
            'end_edu' => $endDate2,
            'school_name'=>'Fırat Üniversitesi',
            'school_description'=>'Yazılım Mühendisliği'
        ]);

    }
}
