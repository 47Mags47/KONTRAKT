<?php

namespace Database\Seeders;

use App\Models\Glossary\ProductCategory;
use App\Models\Glossary\ServiceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::create(['code' => 'home_repair',      'name' => 'Ремонт для дома',       'ico' => 'media/category/home_repair.svg']);
        ProductCategory::create(['code' => 'event',            'name' => 'Проведение мероприятий',]);
        ProductCategory::create(['code' => 'rest',             'name' => 'Активный отдых',]);
        ProductCategory::create(['code' => 'floristic',        'name' => 'Флористика',]);

        ServiceCategory::create(['code' => 'legal_service',    'name' => 'Юридические услуги',]);
        ServiceCategory::create(['code' => 'beauty',           'name' => 'Красота',               'ico' => 'media/category/beauty.svg']);
        ServiceCategory::create(['code' => 'nails',            'name' => 'Ногтевой сервис',       'ico' => 'media/category/nails.svg',         'parent_code' => 'beauty']);
        ServiceCategory::create(['code' => 'transportation',   'name' => 'Грузоперевозки',        'ico' => 'media/category/transportation.svg']);
        ServiceCategory::create(['code' => 'car_service',      'name' => 'Автосервис',            'ico' => 'media/category/car_service.svg']);
        ServiceCategory::create(['code' => 'Atelier',          'name' => 'Ателье',]);
        ServiceCategory::create(['code' => 'technical_repair', 'name' => 'Сервисный ремонт',]);
        ServiceCategory::create(['code' => 'tutorship',        'name' => 'Репетиторство',]);
        ServiceCategory::create(['code' => 'photograph',       'name' => 'Фотограф',]);
    }
}
