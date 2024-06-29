@props(['content'=>'Submit', 'loading'=>'Processing...', 'target', 'extra' => ''])


<button wire:loading.attr="disabled" wire:target="{{ $target }}" class="rounded-full text-xs font-semibold {{ $extra }}">
    <div wire:loading wire:target="{{ $target }}"  {{ $attributes->merge(["class"=>" rounded-full p-4 px-8 text-white cursor-progress bg-primary/60"]) }}>{{ $loading }}</div>
    <div wire:loading.remove wire:target="{{ $target }}"  {{ $attributes->merge(["class"=>"bg-primary rounded-full px-8 p-4 text-white"]) }}>{{ $content }}</div>
</button>
