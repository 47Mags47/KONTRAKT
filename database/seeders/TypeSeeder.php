<?php

namespace Database\Seeders;

use App\Models\Glossary\Glossary_Itemtype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Glossary_Itemtype::create(['id' => 1, 'name' => 'Услуги']);
        Glossary_Itemtype::create(['id' => 2, 'name' => 'Товары']);
    }
}
