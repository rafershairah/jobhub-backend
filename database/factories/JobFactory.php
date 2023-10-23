<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use App\Models\Job;
use App\Models\Company;

class JobFactory extends Factory
{
    protected $model = Job::class;

    // Your list of job titles
    private $jobTitles = [
        'Web Developer',
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
        'Cloud Solutions Architect',
    ];

    public function definition()
    {
        $companies = Company::pluck('id')->toArray();
        $isFeatured = $this->faker->boolean(20);


        return [
            'title' => $this->faker->randomElement($this->jobTitles),
            'description' => $this->faker->paragraph,
            'company_id' => $this->faker->randomElement($companies),
            'job_types' => $this->faker->randomElement(['part_time', 'full_time']),
            'posted_at' => $this->faker->dateTimeThisMonth,
            'income' => $this->faker->numberBetween(10000, 100000),
            'featured' => $isFeatured ? 'Featured' : null,
        ];
    }
}