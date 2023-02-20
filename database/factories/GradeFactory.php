<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'user_id' => fake()->randomDigit(1, 6),
        'grade' => fake()->randomFloat(1, 0, 10),
		'subject' => fake()->randomElement(['Matemáticas', 'Lengua', 'Historia', 'Geografía', 'Inglés']),
		'trimester' => fake()->numberBetween(1, 3),
		'exam' => fake()->numberBetween(1, 3),
		'schoolYear' => '2022-2023',
        ];
    }
}
