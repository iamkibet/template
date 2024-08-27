<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
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
        User::truncate();
        Project::truncate();
        Type::truncate();


        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Project::factory()->count(10)->create();
    }
}
