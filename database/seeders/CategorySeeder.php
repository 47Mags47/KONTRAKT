<?php

namespace Database\Seeders;

use App\Models\Glossary\Glossary_ItemCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Услуги
        Glossary_ItemCategory::create(['name' => 'Товары для детей',        'type_id' => 1]);
        Glossary_ItemCategory::create(['name' => 'Мужская одежда',          'type_id' => 1]);
        Glossary_ItemCategory::create(['name' => 'Женская одежда',          'type_id' => 1]);
        Glossary_ItemCategory::create(['name' => 'Детская одежда',          'type_id' => 1]);
        Glossary_ItemCategory::create(['name' => 'Аксессуары',              'type_id' => 1]);
        Glossary_ItemCategory::create(['name' => 'Бижутерия',               'type_id' => 1]);
        Glossary_ItemCategory::create(['name' => 'Сувениры',                'type_id' => 1]);
        // Товары
        Glossary_ItemCategory::create(['name' => 'Ногтевой сервис',         'type_id' => 2]);
        Glossary_ItemCategory::create(['name' => 'Красота',                 'type_id' => 2]);
        Glossary_ItemCategory::create(['name' => 'Грузоперевозки',          'type_id' => 2]);
        Glossary_ItemCategory::create(['name' => 'Автосервис',              'type_id' => 2]);
        Glossary_ItemCategory::create(['name' => 'Ремонт для дома',         'type_id' => 2]);
        Glossary_ItemCategory::create(['name' => 'Ателье',                  'type_id' => 2]);
        Glossary_ItemCategory::create(['name' => 'Сервисный ремонт',        'type_id' => 2]);
        Glossary_ItemCategory::create(['name' => 'Репетиторство',           'type_id' => 2]);
        Glossary_ItemCategory::create(['name' => 'Проведение мероприятий',  'type_id' => 2]);
        Glossary_ItemCategory::create(['name' => 'Фотограф',                'type_id' => 2]);
        Glossary_ItemCategory::create(['name' => 'Активный отдых',          'type_id' => 2]);
        Glossary_ItemCategory::create(['name' => 'Юридические услуги',      'type_id' => 2]);
        Glossary_ItemCategory::create(['name' => 'Флористика',              'type_id' => 2]);
    }
}
