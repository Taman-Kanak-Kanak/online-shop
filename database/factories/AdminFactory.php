<?php

namespace Database\Factories;

use Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role_id' => 1,
            'fullname' => fake()->name(),
            'username' => fake()->userName(),
            'email' => fake()->email(),
            'password' => Hash::make('password'),
            'status' => 'enabled',
        ];
    }
}
