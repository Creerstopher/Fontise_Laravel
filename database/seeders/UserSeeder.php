<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'email' => 'vazgen@fontise.com',
            'password' => bcrypt('vazgen'),
            'email_verified_at' => now(),
        ]);

        User::query()->create([
            'email' => 'admin@fontise.com',
            'password' => bcrypt('admin'),
            'email_verified_at' => now(),
        ]);
    }
}
