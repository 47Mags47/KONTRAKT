<?php

namespace Database\Factories\Main;

use App\Models\Glossary\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MakerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'logo' => 'media/maker/default_logo.png',
            'city_code' => City::all()->random(1)->first()->code,
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'description' => $this->faker->paragraph(),
            'links' => [
                $this->faker->url(),
                $this->faker->url()
            ],
        ];
    }
}
