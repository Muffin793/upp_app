<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Taggable>
 */
class TaggableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tag_id' => \App\Models\Tag::factory(),
            'taggable_type' => $this->faker->randomElement(['App\Models\Post', 'App\Models\Comment']),
            'taggable_id' => function (array $attributes) {
                // Puedes generar IDs aleatorios aquí, o utilizar algún método específico según tus necesidades
                return $this->faker->randomNumber();
            },
            //
        ];
    }
}
