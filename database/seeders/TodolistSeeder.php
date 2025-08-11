<?php

namespace Database\Seeders;

use App\Models\Todolist;
use App\Models\TodolistPriority;
use App\Models\TodolistStatus;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodolistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todolist::factory(1000)->recycle([
            User::all(),
            TodolistStatus::all(),
            TodolistPriority::all(),
        ])->create();
    }
}
