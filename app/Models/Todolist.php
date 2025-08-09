<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    /** @use HasFactory<\Database\Factories\TodolistFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status_id',
        'slug',
        'user_id',
        'priority_id',
    ];

    protected $guarded = [
        'id'
    ];

    protected $with = ['user', 'priority', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);

    }
    public function priority()
    {
        return $this->belongsTo(TodolistPriority::class, 'priority_id');
    }

    public function status()
    {
        return $this->belongsTo(TodolistStatus::class, 'status_id');
    }
}
