<?php

namespace Database\Seeders;

use App\Models\Main\Maker;
use App\Models\Main\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $maker = Maker::create([
            'id' => 1,
            'city_code' => '001',
            'name' => 'Test Maker',
            'address' => 'ул. Пушкина, д. 47',
            'description' => 'Тестовый поставщик услуг и товаров',
            'logo' => 'media/maker/default_logo.png',
            'comment' => 'Тестовый поставщик услуг и товаров',
            'links' => [
                fake()->url(),
                fake()->url(),
            ]
        ]);

        $product = Product::create([
            'id' => 1,
            'maker_id' => $maker->id,
            'category_code' => 'beauty',
            'name' => 'Тестовый товар поставщика',
            'description' => 'Тестовый товар поставщика',
            'logo' => 'media/product/default_logo.png',
        ]);

    }
}
