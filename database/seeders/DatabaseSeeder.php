<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(\Database\Seeders\CitySeeder::class);
        $this->call(\Database\Seeders\TypeSeeder::class);
        $this->call(\Database\Seeders\CategorySeeder::class);
    }
}
