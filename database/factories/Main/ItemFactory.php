<?php

namespace Database\Factories\Main;

use App\Models\Glossary\ItemType;
use App\Models\Main\Maker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Main\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'maker_id' => Maker::all()->random()->id,
            'type_code' => ItemType::all()->random()->code,
            'name' => $this->faker->text(50),
            'description' => 'Фабрично созданный',
            'logo' => null,
        ];
    }
}
