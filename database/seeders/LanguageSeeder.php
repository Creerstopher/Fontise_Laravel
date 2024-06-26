<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::query()->insert(
            [
                ['name' => 'Латиница'],
                ['name' => 'Кириллица'],
                ['name' => 'Арабская вязь'],
                ['name' => 'Китайский'],
                ['name' => 'Японский'],
                ['name' => 'Корейский'],
                ['name' => 'Иврит'],
                ['name' => 'Греческий'],
                ['name' => 'Грузинский'],
                ['name' => 'Армянский'],
            ]
        );
    }
}
