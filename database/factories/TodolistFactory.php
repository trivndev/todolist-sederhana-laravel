<?php

namespace Database\Factories;

use App\Models\TodolistPriority;
use App\Models\TodolistStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\todolist>
 */
class TodolistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(3, 10);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->paragraph(2, 6),
            'priority_id' => TodolistPriority::factory(),
            'user_id' => User::factory(),
        ];
    }
}
