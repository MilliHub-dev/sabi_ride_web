@props(['values','content'])


<select {{ $attributes->merge(['class'=>"rounded-xl capitalize border p-3 border-gray-300 w-full h-12 outline-0 shadow-sm focus:outline-none focus:ring-blue-400 text-[13px]"]) }} required>
    <option>{{ $content }}</option>
    @foreach ((array) $values as $value)
        <option value="{{ $value }}">{{ $value }}</option>
    @endforeach
</select>