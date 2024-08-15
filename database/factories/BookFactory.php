<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Generates a random title,author,publication_year and description
            'title' => $this->faker->sentence, 
            'author' => $this->faker->name,    
            'publication_year' => $this->faker->year, 
            'description' => $this->faker->paragraph, 
        ];
    }
}

