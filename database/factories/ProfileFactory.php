<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users= User::all();
        return [
            'nombres' => fake()->firstName(),
            'apellidos' => fake()->lastName(),
            'direccion' =>fake()->streetAddress(),
            'status'=> fake()->boolean(),
            'telefono' => fake()->unique()->tollFreePhoneNumber(),
            'user_id' =>fake()->unique()->numberBetween(1,$users->count()),
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
