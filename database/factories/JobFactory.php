<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use App\Models\Company;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();
        $job_titles = ['Web Developer', 
        'Software Engineer', 
        'UX/UI Designer', 
        'FullStack Developer', 
        'Backend Developer', 
        'Frontend Developer',
        'DevOps Engineer',
        'Mobile App Developer',
        'QA Automation Engineer',
        'Social Media Manager',
        'Software Developer',
        'Network Administrator',
        'Data Analyst',
        'Systems Administrator',
        'Database Administrator',
        'Email Marketing Specialist',
        'Cybersecurity Analyst',
        'IT Support Specialist',
        'Content Marketing Specialist', 
        'Cloud Solutions Architect'
    ];

        return [
            'title' => fake()->randomElement($job_titles),
            'description'=> fake()->paragraph(),
            'company_id' => fake()->randomElement(Company::pluck('id'))
        ];
    }
}
