<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();
        $company_names = ['CloudBuilders Tech',
        'AppGenius Solutions', 
        'QualityTech Inc.', 
        'DesignCraft Studios', 
        'BuzzCreators Agency', 
        'ContentCraft Ltd.',
        'SearchOptimize Solutions',
        'InboxGenius Marketing',
        'TechAssist Ltd.',
        'SuccessHub Inc.',
        'SupportTech Solutions',
        'ClientCare Solutions',
        'SmartAI Innovations',
        'DataInsights Co.',
        'DataSculpt Solutions',
        'QuantInsights Ltd.',
        'CureQuest Research Institute',
        'MediCare Pharmacy',
        'MindWell Counseling Services',
        'MotionWell Therapy Center'];

        $industry_names = ['Technology / Cloud Computing',
        'Mobile App Development',
        'Software Testing',
        'Design',
        'Social Media Marketing',
        'Content Marketing',
        'Search Engine Optimization',
        'Email Marketing',
        'Technical Support',
        'Customer Success',
        'Help Desk Support',
        'Client Relations',
        'Artificial Intelligence',
        'Data Analysis',
        'Big Data',
        'Quantitative Analysis',
        'Medical Research',
        'Healthcare - Pharmacy',
        'Mental Health Services',
        'Healthcare - Physical Therapy'];

        return [
            'company_name' => $this->faker->randomElement($company_names),
            'description' => $this->faker->text(100),
            'industry' => $this->faker->randomElement($industry_names),
            'location_id' => Location::inRandomOrder()->firstOrCreate()->id,
        ];
    }
}
