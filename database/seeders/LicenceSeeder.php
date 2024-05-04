<?php

namespace Database\Seeders;

use App\Models\License;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LicenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        License::query()->insert([
            ['name' => 'Personal & Commercial Use'],
            ['name' => 'Personal Use'],
            ['name' => 'Commercial Use'],
            ['name' => 'Open Font License']
        ]);
    }
}
