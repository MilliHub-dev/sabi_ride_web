@props(['title' => null])

<div class="fixed inset-0 overflow-y-auto px-4 py-6 lg:px-0 z-[10000] center" x-show="showModal">
    <div
        x-show="showModal"
        class="fixed inset-0 transform transition-all"
        x-on:click="showModal = false; noOverflow = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        >
        <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>

    <div class="max-w-lg w-full mx-auto">
        <div
            x-show="showModal"
            {{ $attributes->merge(["class"=>"mb-6 bg-white rounded-3xl shadow-xl transform transition-all p-5 sm:p-10 "]) }}
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            >
        {{ $slot }}
    </div>
    </div>
</div>
