<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\AlumnoFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory()->create([
             "name"=>"Manuel Romero",
             "email"=>"a@a.com",
             "password"=> Hash::make("12345678")
         ]);

        $this->call([
            AlumnoSeeder::class,
            ProyectoSeeder::class,
        ]);

    }
}
