<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Others\About\About::create([
            'name' => "Md. Mostafizur Rahman",
            'fname' => "Abul Kashem",
            'mname' => "Minare Jahan",
            'gender' => "Male",
            'mobile' => "01611100752",
            'nationality' => "Bangladeshi",
            'religion' => "Islam",
            'm_status' => "Single",
            'pe_address' => "#31 Molla Bari, East Raza Bazar, Tejgaon, Dhaka - 1215",
            'per_address' => "Village: Dulal, P.O: Mydher Chala, P.S: Ghatail, Tangail",
            'blood' => "A+",
            'nid' => "666686463",
            'email' => "mostafizur.rahman0752@gmail.com",
            'about' => "I am quick learner. I believe in hard work and efficiency. I always like to
            learn new technology and have experience with new thing. Always ready
            to prove myself through my work and responsibility.",
        ]);
    }
}
