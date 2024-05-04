<?php

namespace Database\Seeders;

use App\Models\Style;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Style::query()->insert([
            ['name' => 'Thin', 'weight' => '100'],
            ['name' => 'ExtraLight', 'weight' => '200'],
            ['name' => 'Light', 'weight' => '300'],
            ['name' => 'Normal', 'weight' => '400'],
            ['name' => 'Medium', 'weight' => '500'],
            ['name' => 'SemiBold', 'weight' => '600'],
            ['name' => 'Bold', 'weight' => '700'],
            ['name' => 'ExtraBold', 'weight' => '800'],
        ]);
    }
}
