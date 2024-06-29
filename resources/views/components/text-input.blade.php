@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'rounded-xl border border-gray-300 p-3 text-gray-600 text-sm outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-100 h-12',
]) !!}>
