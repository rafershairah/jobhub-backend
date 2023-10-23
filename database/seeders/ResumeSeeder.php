<?php

namespace Database\Seeders;

use App\Models\Resume;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User; 
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; 


class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $users = User::all();

        $users->each(function (User $user) use ($faker) {
            Resume::factory()->create([
                'user_id' => $user->id,
                'Skills' => $faker->sentence,
                'Work Experience' => $faker->paragraph,
                'Education' => $faker->sentence,
                'Contact Info' => $faker->unique()->safeEmail,
            ]);
        });
    }
    
}
