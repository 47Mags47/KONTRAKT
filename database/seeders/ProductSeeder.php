<?php

namespace Database\Seeders;

use App\Models\Glossary\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::create(['code' => 'beauty',           'name' => 'Красота',               'ico' => 'media/category/beauty.svg'                                     ]);
        ProductCategory::create(['code' => 'nails',            'name' => 'Ногтевой сервис',       'ico' => 'media/category/nails.svg',         'parent_code' => 'beauty'   ]);
        ProductCategory::create(['code' => 'transportation',   'name' => 'Грузоперевозки',        'ico' => 'media/category/transportation.svg'                             ]);
        ProductCategory::create(['code' => 'car_service',      'name' => 'Автосервис',            'ico' => 'media/category/car_service.svg'                                ]);
        ProductCategory::create(['code' => 'home_repair',      'name' => 'Ремонт для дома',       'ico' => 'media/category/home_repair.svg'                                ]);
        ProductCategory::create(['code' => 'Atelier',          'name' => 'Ателье',                ]);
        ProductCategory::create(['code' => 'technical_repair', 'name' => 'Сервисный ремонт',      ]);
        ProductCategory::create(['code' => 'tutorship',        'name' => 'Репетиторство',         ]);
        ProductCategory::create(['code' => 'event',            'name' => 'Проведение мероприятий',]);
        ProductCategory::create(['code' => 'photograph',       'name' => 'Фотограф',              ]);
        ProductCategory::create(['code' => 'rest',             'name' => 'Активный отдых',        ]);
        ProductCategory::create(['code' => 'legal_service',    'name' => 'Юридические услуги',    ]);
        ProductCategory::create(['code' => 'floristic',        'name' => 'Флористика',            ]);
    }
}
