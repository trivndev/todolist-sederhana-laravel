<?php

namespace App\Livewire\Todolist;

use App\Models\Todolist;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[layout('components.layouts.main-app')]
class Index extends Component
{
    use WithPagination;

    #[Computed()]
    public function todolists()
    {
        return Todolist::latest()->paginate(12);
    }

    public function render()
    {
        return view('livewire.todolist.index');
    }
}
