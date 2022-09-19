<?php

namespace Database\Factories;

use App\Models\Book;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'released' => date('Y-m-d'),
            'description' => $this->faker->text,
            'genre' => $this->faker->unique()->word
        ];
    }
}
