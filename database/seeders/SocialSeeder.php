<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Others\Social\Social::create([

            'facebook' => "sm.sohag007",
            'twitter' => "sm.sohag007",
            'github' => "mostafizur008",
            'whatsapp' => "01511100752",
        ]);
    }
}
