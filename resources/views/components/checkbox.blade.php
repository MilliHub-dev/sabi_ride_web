@props([
    'model' => null,
    'name' => null,
    'content' => null,
])


<label for="{{ $name }}" class="inline-flex items-center cursor-pointer">
    <input
        wire:model="{{ $model }}"
        id="{{ $name }}"
        type="checkbox"
        class="rounded border-gray-300 text-primary shrink-0 size-5 shadow-sm outline-0 focus:border-0 focus:ring-0"
        {!! $attributes !!}
        name="{{ $name }}"
    />

    <span class="ms-2 text-sm text-gray-600">
        {{ $slot->isEmpty() ? $content : $slot }}
    </span>
</label>
