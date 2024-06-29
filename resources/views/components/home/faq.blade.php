<div>
    <h2>Frequently Asked Questions</h2>
    <div class="flex flex-col space-y-4 mt-4 justify-center items-center" x-data="{ openItems: {} }">
        <template x-for="i in [1, 2, 3, 4, 5, 6]" :key="i">
            <div x-data="{ open: openItems[i] || false }" class="text-sm border rounded-xl p-4 w-full">
                <div class="flex justify-between items-center" @click="openItems[i] = !openItems[i]; open = openItems[i]">
                    <div class="cursor-pointer font-semibold text-lg">Can i drive Sabi Ride in my state?</div>
                    <div :class="{ 'rotate-180':open }" class="text-blue-800 transition-transform duration-300">
                        <x-svg.chevron-down />
                    </div>
                </div>
                <div x-show="open"
                        class="transition-all"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-y-4"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-4"
                    >
                    <div class="py-4 text-xs font-[400] leading-5 text-zinc-600 flex gap-2">
                        <div>Do not wait for a weekly or monthly paycheck, go Get it daily as you drive. Now Weekly or monthly paycheck, Get it daily as you drive.</div>
                    </div>
                </div>
            </div>
        </template>
    </div>
</div>
