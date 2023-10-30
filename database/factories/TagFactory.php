<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tagNames = ['Tech', 'Programming', 'Science', 'Travel', 'Food', 'Fitness', 'Fashion', 'Music', 'Art', 'Photography', 'Nature', 'Health', 'Business', 'Books', 'Movies', 'Gaming', 'Sports'];
        return [
            'name' => $this->faker->randomElement($tagNames),
            //
        ];
    }
}
