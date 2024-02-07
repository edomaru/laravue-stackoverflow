<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //membuat data seeder dengan relasi table sekaligus
        $users= User::factory(10)->create();

        //membuat relasi seeder dengan table question
        $users->each(function($user){
            $user->questions()->createMany(
                Question::factory(5)->make()->toArray(),
            );
        });
    }
}
