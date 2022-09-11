<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Title',
            'tags' =>  'tag1,tag2,tag3',
            'location' => $this->faker->city(),
            'email' => $this->faker->companyEmail(),
            'description' => $this->faker->paragraph(5)
        ];
    }
}
