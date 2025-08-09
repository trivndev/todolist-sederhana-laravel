@php
    $colorMap = [
            'green' => 'text-green-500',
            'yellow' => 'text-yellow-500',
            'amber' => 'text-amber-500',
            'red' => 'text-red-500',
            'gray' => 'text-gray-500',
        ];
        $colorClass = $colorMap[$todolist->priority->color] ?? 'text-gray-500';

@endphp

<div class="p-4 shadow border border-gray-100 rounded-lg hover:scale-[101%] transition-all duration-300 space-y-2">
    <div class="flex flex-col">
        <flux:heading class="text-xl order-2 line-clamp-1">{{ $todolist->title }}</flux:heading>
        <div class="flex items-center gap-1 order-1">
            <flux:icon.exclamation-circle {{ $attributes->merge(['class' => $colorClass]) }}/>
            <flux:text {{ $attributes->merge(['class'=> $colorClass]) }}>{{ $todolist->priority->name }}</flux:text>
        </div>
    </div>
    <flux:separator/>
    <flux:text>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci debitis deserunt facilis libero nihil nulla sit ullam. Ducimus, fugiat, id.</flux:text>
</div>
