<?php

namespace Database\Seeders;

use App\Models\Glossary\ItemTag;
use App\Models\Glossary\ItemType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ItemType::create(['code' => 'product', 'name' => 'Товар']);
        ItemType::create(['code' => 'service', 'name' => 'Услуга']);

        ItemTag::create(['name' => "Ремонт для дома"]);
        ItemTag::create(['name' => "Проведение мероприятий"]);
        ItemTag::create(['name' => "Активный отдых"]);
        ItemTag::create(['name' => "Флористика"]);
        ItemTag::create(['name' => "Юридические услуги"]);
        ItemTag::create(['name' => "Красота"]);
        ItemTag::create(['name' => "Ногтевой сервис"]);
        ItemTag::create(['name' => "Грузоперевозки"]);
        ItemTag::create(['name' => "Автосервис"]);
        ItemTag::create(['name' => "Ателье"]);
        ItemTag::create(['name' => "Сервисный ремонт"]);
        ItemTag::create(['name' => "Репетиторство"]);
        ItemTag::create(['name' => "Фотограф"]);
    }
}
