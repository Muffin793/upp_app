<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombres = ['Ciencia', 'Deportes', 'Noticias', 'Televisa', 'Entretenimiento', 'Tecnología', 'Música', 'Moda', 'Salud', 'Viajes'];
        return [
            'nombre' => $this->faker->randomElement($nombres),
            //
        ];
    }
}
