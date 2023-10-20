<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();
        $state = [
            'Alabama',
            'Alaska',
            'Arizona',
            'Arkansas',
            'California', 
            'Colorado',
            'Connecticut',
            'Delaware',
            'Florida',
            'Georgia',
            'Hawaii',
            'Idaho',
            'Illinois',
            'Indiana',
            'Iowa',
            'Kansas',
            'Kentucky', 
            'Louisiana',
            'Maine',
            'Maryland'];
        $zip_code = [
            '90210', 
            '10001', 
            '60601', 
            '30301', 
            '33109', 
            '75201', 
            '94102', 
            '20001', 
            '94110', 
            '60610', 
            '10013', 
            '90292', 
            '98101', 
            '30303', 
            '60618', 
            '10036', 
            '20037', 
            '90232', 
            '90265', 
            '10005'];

        return [
            'Country' =>fake()->country(),
            'City'=> fake()->city(),
            'State/province'=>fake()->randomElement($state),
            'Zip Code'=>fake()-> randomElement($zip_code)
        ];
    }
}
