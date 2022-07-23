<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'first_name' => "Mostafizur",
            'last_name' => "Rahman",
            'name' => "Md. Mostafizur Rahman",
            'email' => "admin@gmail.com",
            'password' => Hash::make('Sohag=008')
        ]);
    }
}
