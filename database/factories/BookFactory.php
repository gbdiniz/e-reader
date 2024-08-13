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
            'title' => $this->faker->sentence, // Generates a random title
            'author' => $this->faker->name,    // Generates a random author name
            'publication_year' => $this->faker->year, // Generates a random year
            'description' => $this->faker->paragraph, // Generates a random description
        ];
    }
}

