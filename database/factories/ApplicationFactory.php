<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $job = Job::inRandomOrder()->first();

        if (!$user || !$job) {
            $user = User::factory()->create();
            $job = Job::factory()->create();
        }

        return [
            'user_id' => $user->id,
            'job_id' => $job->id,
        ];
    }
}
