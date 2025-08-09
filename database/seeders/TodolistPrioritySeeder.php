<?php

namespace Database\Seeders;

use App\Models\TodolistPriority;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodolistPrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TodolistPriority::create([
            'name' => 'Low',
            'color' => 'green',
            'slug' => 'low',
        ]);
        TodolistPriority::create([
            'name' => 'Medium',
            'color' => 'yellow',
            'slug' => 'medium',
        ]);
        TodolistPriority::create([
            'name' => 'High',
            'color' => 'red',
            'slug' => 'high',
        ]);
    }
}
