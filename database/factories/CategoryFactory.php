<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected  $categories = [
        'Diversion', 'Educacion', 'Informativo', 'Cientifico', 'Politico', 'Interes Social',
        'Videojuegos', 'Noticias', 'Tecnologia', 'Deportes', 'Entretenimiento', 'Arte',
        'Viajes', 'Salud', 'Moda', 'Cine', 'Musica', 'Gastronomia', 'Ciencia Ficcion',
        'Historia', 'Literatura', 'Medio Ambiente', 'Economia', 'Humor', 'Religión',
        'Psicología', 'Motivacional', 'Animales', 'Automoviles', 'Fotografia', 'Diseño',
        'Belleza', 'Hogar', 'Educacion Fisica', 'Fitness', 'Jardineria', 'Bricolaje',
        'Mascotas', 'Tutoriales', 'Maternidad', 'Bebes', 'Adultos Mayores', 'Redes Sociales',
        'Marketing', 'Finanzas', 'Negocios', 'Desarrollo Personal', 'Aventuras', 'Conspiraciones',
    ];
    public function definition(): array
    {

        $name=array_shift($this->categories);
        return [
            
            'name' => $name,

            //
        ];
    }
}
