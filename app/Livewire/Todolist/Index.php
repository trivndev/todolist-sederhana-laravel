<?php

namespace App\Livewire\Todolist;

use App\Livewire\Forms\todolistForm;
use App\Models\Todolist;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[layout('components.layouts.main-app')]
class Index extends Component
{
    use WithPagination;

    public TodolistForm $todolistForm;

    public function createTodolist()
    {
        $this->todolistForm->store();
        session()->flash('todolistCreated', 'Todolist created successfully.');
    }

    #[Computed()]
    public function todolists()
    {
        return Todolist::latest()->where('user_id', auth()->id())->paginate(12);
    }

    public function render()
    {
        return view('livewire.todolist.index');
    }
}
