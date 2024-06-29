@props(['active', 'navigate' => true])

@php
$classes = ($active ?? false)
        ? 'text-zinc-800 border-l-4 border-primary p-3 block transition-all ease-in hover:ease-out delay-75'

        : ' hover:text-blue-500 text-gray-600 p-3 block transition-all ease-in hover:ease-out delay-75';
@endphp

@if($navigate)
    <a {{ $attributes->merge(['class' => $classes]) }}  wire:navigate>
        {{ $slot }}
    </a>
@else
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@endif
