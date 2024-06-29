@props(['step'])
<div {{ $attributes->merge(["class"=>"flex items-center justify-between w-10/12 mx-auto mt-5 p-3 md:p-0 text-white"]) }}>


    <div class="{{ $step === 1 ? 'bg-primary' : 'bg-gray-300 text-black dark:text-white dark:bg-neutral-700' }} w-8 h-8 rounded-full flex items-center justify-center">
        1
    </div>
    <div class="flex-1 h-1 bg-gray-300 dark:bg-neutral-700 mx-2"></div>

    <div class="{{ $step === 2 ? 'bg-primary' : 'bg-gray-300 text-black dark:text-white dark:bg-neutral-700' }} w-8 h-8 rounded-full flex items-center justify-center">
        2
    </div>

    <div class="flex-1 h-1 bg-gray-300 dark:bg-neutral-700 mx-2"></div>

    <div class="{{ $step === 3 ? 'bg-primary' : 'bg-gray-300 text-black dark:text-white dark:bg-neutral-700' }} w-8 h-8 rounded-full flex items-center justify-center">
        3
    </div>

</div>
