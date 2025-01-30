<?php

namespace Database\Seeders;

use App\Models\Main\Item;
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
        Maker::factory(10)->create();
        Item::factory(100)->create();
    }
}
