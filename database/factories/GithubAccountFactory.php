<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GithubAccount>
 */
class GithubAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Asegúrate de que esto esté correcto
        'github_id' => $this->faker->unique()->randomNumber(),
        'github_token' => $this->faker->sha256,
        'github_refresh_token' => $this->faker->sha256,

            //
        ];
    }
}
