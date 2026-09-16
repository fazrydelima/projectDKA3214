<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_student' => fake() -> name(),
            'cohort' => fake() -> randomElement(['2021','2022','2023','2024','2025']),
            'class' => fake() -> randomElement(['1SVMIPD','2SVMIPD','1DVMIPD','2DVMIPD']),
            'no_ic' => fake() -> numerify('############'),
            'age' => fake() -> numberBetween('16', '19'),
        ];
    }
}
