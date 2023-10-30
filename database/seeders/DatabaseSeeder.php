<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\GitHubAccountFactory;

use App\Models\User;
use App\Models\Profile;
use App\Models\Phone;
use App\Models\Location;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Level;
use App\Models\GitHubAccount;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Taggable;
use App\Models\Image;
use App\Models\Group;
use App\Models\GroupUser;
use App\Models\Video;
use App\Models\Comment;
use App\Models\Gender;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Category::factory()->count(8)->create();
        
        Gender::factory()->create(['name' => 'Female']);
        Gender::factory()->create(['name' => 'Male']);



        Level::factory()->create(['name' => 'Beginner']);
        Level::factory()->create(['name' => 'Intermediate']);
        Level::factory()->create(['name' => 'Advanced']);

        $mexico = Country::factory()->create(['name' => 'Mexico']);

        $mexicoStates = [
            
            'Oaxaca' => ['Oaxaca City', 'Salina Cruz', 'Juchitan'],
            'Puebla' => ['Puebla City', 'Tehuacan', 'Cholula'],
            'Queretaro' => ['Queretaro City', 'San Juan del Rio', 'Corregidora'],
            'Quintana Roo' => ['Cancun', 'Playa del Carmen', 'Cozumel'],
            'San Luis Potosi' => ['San Luis Potosi City', 'Soledad de Graciano Sanchez', 'Matehuala'],
            'Sinaloa' => ['Culiacan', 'Mazatlan', 'Los Mochis'],
            'Sonora' => ['Hermosillo', 'Ciudad Obregon', 'Nogales'],
            'Tabasco' => ['Villahermosa', 'Cárdenas', 'Comalcalco'],
            'Tamaulipas' => ['Tampico', 'Reynosa', 'Matamoros'],
            'Campeche' => ['Campeche City', 'Ciudad del Carmen', 'Champoton'],
            'Chiapas' => ['Tuxtla Gutierrez', 'San Cristobal de las Casas', 'Tapachula'],
            'Chihuahua' => ['Chihuahua City', 'Juarez', 'Cuauhtemoc'],
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
            'Tlaxcala' => ['Tlaxcala City', 'Huehuetlan el Grande', 'Apizaco'],
            'Veracruz' => ['Veracruz City', 'Xalapa', 'Coatzacoalcos'],
            'Aguascalientes' => ['Aguascalientes City', 'Jesus Maria', 'Rincon de Romos'],
            'Baja California' => ['Tijuana', 'Mexicali', 'Ensenada'],
            'Baja California Sur' => ['La Paz', 'Cabo San Lucas', 'San Jose del Cabo'],
            'Yucatan' => ['Merida', 'Tizimin', 'Valladolid'],
            'Zacatecas' => ['Zacatecas City', 'Guadalupe', 'Fresnillo'],
            'Coahuila' => ['Saltillo', 'Torreon', 'Monclova'],
            'Colima' => ['Colima City', 'Manzanillo', 'Villa de Alvarez'],

          
        ];
        
        foreach ($mexicoStates as $stateName => $cities) {
            $state = State::factory()->create(['name' => $stateName, 'country_id' => $mexico->id]);

            foreach ($cities as $cityName) {
                City::factory()->create(['name' => $cityName, 'state_id' => $state->id]);
            }
        }
        
        Tag::factory(20)->create();
        User::factory(50)->create()->each(function ($user) use($mexico)
        
        {
            
            $profile = $user->profile()->save(Profile::factory()->make());
            Image::factory()->create();
            Taggable::factory()->create();
            $user->phone()->save(Phone::factory()->make());
            $country = Country::inRandomOrder()->first();
            $location = $profile->location()->save(Location::factory()->make());
            GitHubAccount::factory()->create(['user_id' => $user->id]);
            Group::factory()->create();
            GroupUser::factory()->create();
            Video::factory()->create();
            Comment::factory()->create();
            $level = Level::inRandomOrder()->first();
           
        
                if ($level) {
                $user->update(['level_id' => $level->id]);
                }
                \App\Models\Post::factory(5)->create([
                'user_id' => $user->id,
                'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
        ]);
          
        });
       
      
  
      
    }
}
