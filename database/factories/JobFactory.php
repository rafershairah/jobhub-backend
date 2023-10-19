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
    public function definition()
    {
        $faker = Faker::create();
        
        $job_titles=['Web Developer','Software Eng', 'UX/UI Designer', 'FullStack Developer', 'Backend Developer','Frontend Developer'
        
        ]

        return [
            'title' => $faker->randomElement($job_titles),
            'description' => 'Manually Entered Description',
            'company_id' => $faker->randomElement(Company::pluck('id'))
        ];
    }
}
