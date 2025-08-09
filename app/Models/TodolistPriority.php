<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodolistPriority extends Model
{
    /** @use HasFactory<\Database\Factories\TodolistPriorityFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
        'slug'
    ];

    protected $guarded = [
        'id'
    ];

    public function todolist()
    {
        return $this->hasMany(Todolist::class, 'priority_id');
    }
}
