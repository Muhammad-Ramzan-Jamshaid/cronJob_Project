<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User; 
use Illuminate\Database\Seeder;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
           'name' => "Muhammad Ramzan jamshaid",
           'Email'=> "jamshaidali8u@gmail.com",
            'password'=> bcrypt('password123')
        ]);
        User::create([
           'name' => "Manan Qureshi",
           'Email'=> "manansadiqi355@gmail.com",
            'password'=> bcrypt('password123')
        ]);
        User::create([
           'name' => "Muzamal Ashraf",
           'Email'=> "ashrafmuzzamal7@gmail.com",
            'password'=> bcrypt('password123')
        ]);
    }
}
