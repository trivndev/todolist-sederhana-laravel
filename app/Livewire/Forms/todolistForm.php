<?php

namespace App\Livewire\Forms;

use App\Models\Todolist;
use App\Models\TodolistPriority;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class todolistForm extends Form
{
    public string $title = '';
    public string $description = '';
    public int $priority = 0;
    public string $dueDate = '';

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'min:4', 'max:64'],
            'description' => ['required', 'string'],
            'priority' => ['required', 'integer'],
            'dueDate' => ['required', 'date'],
        ];
    }

    public function messages()
    {
        return[
            'priority.required' => 'Please select a priority',
            'priority.integer' => 'Please select a valid priority',
        ];
    }

    public function store()
    {
        $this->validate();

        Todolist::create([
            'title' => $this->title,
            'slug'=> Str::slug($this->title),
            'description' => $this->description,
            'priority_id' => $this->priority,
            'due_date' => $this->dueDate,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }
}
