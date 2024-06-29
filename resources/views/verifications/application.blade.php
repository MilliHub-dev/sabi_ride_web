<x-guest-layout>
    <div class="max-w-md">
        <div class="p-8 py-2 sm:p-0 justify-end flex">
            <a href="{{ route('become.driver') }}" class="border shadow-md rounded-full size-10 sm:size-14 flex items-center justify-center transition duration-150 ease-in-out" >
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </a>
        </div>
        <div class="sm:p-10 sm:border sm:min-h-[700px] p-8 sm:mt-5 rounded-3xl sm:shadow-md sm:border-gray-200 w-full">
            <div class="center mb-5">
                <x-application-logo />
            </div>
            <h3>Sign up to <span class="text-primary">Become a driver</span></h3>
            <p class="my-3 sm:my-5 text-gray-600">It takes about 2 minutes to sign up</p>
            <livewire:application.form status="register" />
        </div>
    </div>
</x-guest-layout>