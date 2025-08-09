<div>
   <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
       @foreach($this->todolists as $todolist)
           <x-todolist-card :$todolist/>
       @endforeach
   </div>
</div>
