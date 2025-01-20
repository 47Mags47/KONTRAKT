<?php

namespace Database\Seeders;

use App\Models\Glossary\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create(['code' => '001',  'name'    => 'Анжеро-Судженск']);
        City::create(['code' => '002',  'name'    => 'Белово']);
        City::create(['code' => '003',  'name'    => 'Берёзовский']);
        City::create(['code' => '004',  'name'    => 'Гурьевск']);
        City::create(['code' => '005',  'name'    => 'Ижморский']);
        City::create(['code' => '006',  'name'    => 'Калтан']);
        City::create(['code' => '007',  'name'    => 'Кемерово']);
        City::create(['code' => '009',  'name'    => 'Киселёвск']);
        City::create(['code' => '010',  'name'   => 'Крапивинский']);
        City::create(['code' => '012',  'name'   => 'Ленинск-Кузнецкий']);
        City::create(['code' => '013',  'name'   => 'Мариинск']);
        City::create(['code' => '014',  'name'   => 'Междуреченск']);
        City::create(['code' => '015',  'name'   => 'Мыски']);
        City::create(['code' => '016',  'name'   => 'Новокузнецк']);
        City::create(['code' => '017',  'name'   => 'Осинники']);
        City::create(['code' => '018',  'name'   => 'Полысаево']);
        City::create(['code' => '019',  'name'   => 'Прокопьевск']);
        City::create(['code' => '020',  'name'   => 'Промышленовский']);
        City::create(['code' => '021',  'name'   => 'Тайга']);
        City::create(['code' => '022',  'name'   => 'Таштагол']);
        City::create(['code' => '023',  'name'   => 'Тисуль']);
        City::create(['code' => '024',  'name'   => 'Топки']);
        City::create(['code' => '025',  'name'   => 'Тяжин']);
        City::create(['code' => '026',  'name'   => 'Чебула']);
        City::create(['code' => '027',  'name'   => 'Юрга']);
        City::create(['code' => '028',  'name'   => 'Яя']);
        City::create(['code' => '029',  'name'   => 'Яшкино']);
    }
}
