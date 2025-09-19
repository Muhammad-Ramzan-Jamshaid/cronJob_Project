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
        User::ipdateOrCreate([
           'name' => "Muhammad Ramzan jamshaid",
           'Email'=> "ramzanjamshiad8u@gmail.com",
            'password'=> bcrypt('password123')
        ]);
        User::updateOrCreate([
           'name' => "Manan Qureshi",
           'Email'=> "manansadiqi355@gmail.com",
            'password'=> bcrypt('password123')
        ]);
        User::updateOrCreate([
           'name' => "Muzamal Ashraf",
           'Email'=> "ashrafmuzzamal7@gmail.com",
            'password'=> bcrypt('password123')
        ]);
    }
}
