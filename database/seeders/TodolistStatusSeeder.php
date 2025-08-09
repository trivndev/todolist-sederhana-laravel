<?php

namespace Database\Seeders;

use App\Models\TodolistStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodolistStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TodolistStatus::create([
            'name' => 'Not Started',
            'color' => 'gray',
            'slug' => 'active',
        ]);
        TodolistStatus::create([
            'name' => 'In Progress',
            'color' => 'blue',
            'slug' => 'in-progress',
        ]);
        TodolistStatus::create([
            'name' => 'Completed',
            'color' => 'green',
            'slug' => 'completed',
        ]);
        TodolistStatus::create([
            'name' => 'On Hold',
            'color' => 'yellow',
            'slug' => 'on-hold',
        ]);
        TodolistStatus::create([
            'name' => 'Cancelled',
            'color' => 'red',
            'slug' => 'cancelled',
        ]);
    }
}
