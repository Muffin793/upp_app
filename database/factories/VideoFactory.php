<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();

        return [
            'category_id' => $category->id,
            'message' => $this->faker->paragraph(5), // Genera un párrafo con 5 frases
            'video_path' => $this->faker->url, // Genera una URL aleatoria (puedes ajustar según tus necesidades)
            'user_id' => $user->id,
            //
        ];
    }
}
