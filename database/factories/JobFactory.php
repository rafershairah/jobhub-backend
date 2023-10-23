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
        
        $featured = $this->faker->boolean(20);
        $title = $this->faker->randomElement($this->jobTitles);
        $company = Company::inRandomOrder()->first();
       
        return [
            'title' => $title,
            'id' => $title,
            'description' => $this->faker->paragraph,
            'company_id' => Company::factory()->create()->id,
            'job_types' => $this->faker->randomElement(['part_time', 'full_time']),
            'job_date' => $this->faker->dateTimeThisMonth->format('Y-m-d H:i:s'),
            'income' => $this->faker->numberBetween(10000, 100000),
            'job_featured' => $this->faker->boolean(20),
];
    }
}