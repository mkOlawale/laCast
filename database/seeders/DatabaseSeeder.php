<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\User;
use  App\Models\Note;

class DatabaseSeeder extends Seeder 
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory()->create([
                "id" => 1,
                "name" => "test",
                "email" => "test@gmail.com",
                "password" => bcrypt('pass123'),
        ]);

        Note::factory(50)->create();
    }
} 
