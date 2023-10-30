<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GroupUser>
 */
class GroupUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'group_id' => function () {
                return \App\Models\Group::factory()->create()->id;
            },
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            //
        ];
    }
}
