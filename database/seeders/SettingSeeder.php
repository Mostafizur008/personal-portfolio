<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting\Setting::create([

            'title' => "Resume",
            'title1' => "Dashboard",
            'name' => "Md. Mostafizur Rahman",
            'name1' => "Mrsbd",
        ]);
    }
}
