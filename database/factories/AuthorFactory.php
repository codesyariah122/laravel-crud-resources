<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;

class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Author::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'jobdesk' => $this->faker->randomElement(['Writter', 'Pendekar', 'Petualang', 'Pemancing Mania', 'Sultan']),
            'about' => $this->faker->text,
            'country' => $this->faker->randomElement(['England', 'Wales', 'Scotland', 'Northern Ireland', 'Southern Ireland', 'United Kingdom'])
        ];
    }
}
