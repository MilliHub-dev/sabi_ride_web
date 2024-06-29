@props(['content'=>'Submit', 'loading'=>'Processing...', 'target', 'extra' => ''])


<button wire:loading.attr="disabled" wire:target="{{ $target }}" class="rounded-full text-xs font-semibold {{ $extra }}">
    <div wire:loading wire:target="{{ $target }}"  {{ $attributes->merge(["class"=>" rounded-full p-3 px-8 border-zinc-300/90 text-zinc-600 cursor-progress bg-gray-200 border"]) }}>{{ $loading }}</div>
    <div wire:loading.remove wire:target="{{ $target }}"  {{ $attributes->merge(["class"=>"bg-gray-200 border border-zinc-300/90 rounded-full px-8 p-3 text-zinc-600"]) }}>{{ $content }}</div>
</button>
