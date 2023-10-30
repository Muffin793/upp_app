<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\State>
 */
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
           // Estados de México y ciudades asociadas
$states = [
    'Aguascalientes' => ['Aguascalientes City', 'Jesus Maria', 'Rincon de Romos'],
    'Baja California' => ['Tijuana', 'Mexicali', 'Ensenada'],
    'Baja California Sur' => ['La Paz', 'Cabo San Lucas', 'San Jose del Cabo'],
    'Campeche' => ['Campeche City', 'Ciudad del Carmen', 'Champoton'],
    'Chiapas' => ['Tuxtla Gutierrez', 'San Cristobal de las Casas', 'Tapachula'],
    'Chihuahua' => ['Chihuahua City', 'Juarez', 'Cuauhtemoc'],
    'Coahuila' => ['Saltillo', 'Torreon', 'Monclova'],
    'Colima' => ['Colima City', 'Manzanillo', 'Villa de Alvarez'],
    'Durango' => ['Durango City', 'Gomez Palacio', 'Lerdo'],
    'Guanajuato' => ['Guanajuato City', 'Leon', 'Irapuato'],
    'Guerrero' => ['Acapulco', 'Chilpancingo', 'Iguala'],
    'Hidalgo' => ['Pachuca', 'Tulancingo', 'Tizayuca'],
    'Jalisco' => ['Guadalajara', 'Zapopan', 'Tlaquepaque'],
    'Mexico' => ['Toluca', 'Naucalpan', 'Ecatepec'],
    'Michoacan' => ['Morelia', 'Uruapan', 'Zamora'],
    'Morelos' => ['Cuernavaca', 'Cuautla', 'Jiutepec'],
    'Nayarit' => ['Tepic', 'Tecuala', 'Compostela'],
    'Nuevo Leon' => ['Monterrey', 'San Nicolas de los Garza', 'Guadalupe'],
    'Oaxaca' => ['Oaxaca City', 'Salina Cruz', 'Juchitan'],
    'Puebla' => ['Puebla City', 'Tehuacan', 'Cholula'],
    'Queretaro' => ['Queretaro City', 'San Juan del Rio', 'Corregidora'],
    'Quintana Roo' => ['Cancun', 'Playa del Carmen', 'Cozumel'],
    'San Luis Potosi' => ['San Luis Potosi City', 'Soledad de Graciano Sanchez', 'Matehuala'],
    'Sinaloa' => ['Culiacan', 'Mazatlan', 'Los Mochis'],
    'Sonora' => ['Hermosillo', 'Ciudad Obregon', 'Nogales'],
    'Tabasco' => ['Villahermosa', 'Cárdenas', 'Comalcalco'],
    'Tamaulipas' => ['Tampico', 'Reynosa', 'Matamoros'],
    'Tlaxcala' => ['Tlaxcala City', 'Huehuetlan el Grande', 'Apizaco'],
    'Veracruz' => ['Veracruz City', 'Xalapa', 'Coatzacoalcos'],
    'Yucatan' => ['Merida', 'Tizimin', 'Valladolid'],
    'Zacatecas' => ['Zacatecas City', 'Guadalupe', 'Fresnillo'],
  
];
$stateName = $this->faker->randomElement(array_keys($states));

        return [
            'name' => $stateName,
            'country_id' => function () {
                return Country::inRandomOrder()->first()->id;
            //
            },
        ];
    }
}
