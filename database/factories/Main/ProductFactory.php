<?php

namespace Database\Factories\Main;

use App\Models\Glossary\ProductCategory;
use App\Models\Main\Maker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Main\Product>
 */
class ProductFactory extends Factory
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
            'category_code' => ProductCategory::all()->random()->code,
            'name' => $this->faker->text(50),
            'description' => 'Фабрично созданный',
            'logo' => null,
        ];
    }
}
