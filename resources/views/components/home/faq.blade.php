<div x-data="{
    faqs:[
            {
                question: 'What are the requirements to become a driver?',
                answer: 'To become a driver, you typically need a valid driver\'s license, proof of insurance, and a clean driving record. Specific requirements may vary by location.'
            },
            {
                question: 'How do I sign up to drive for the platform?',
                answer: 'You can sign up through our mobile app or website. Simply provide your personal information, upload required documents, and complete a background check.'
            },
            {
                question: 'What types of vehicles are accepted on the platform?',
                answer: 'We accept various types of vehicles depending on the service level, including sedans, SUVs, and in some locations, specialty vehicles like minivans or electric cars.'
            },
            {
                question: 'How and when do I get paid?',
                answer: 'Drivers are paid weekly through direct deposit to their bank account. Payments are typically processed every week for the previous week\'s earnings.'
            },
            {
                question: 'What are the peak hours or busy times for driving?',
                answer: 'Peak hours can vary by location and day, but generally, weekday mornings (commute hours) and evenings (after work) tend to be busiest. Weekends, especially evenings, can also be busy.'
            },
            {
                question: 'How is pricing determined for rides?',
                answer: 'Pricing is determined based on factors like distance, time, demand, and service level chosen by the rider. Drivers receive a portion of the fare for each completed trip.'
            },
            {
                question: 'How does the rating system work?',
                answer: 'After each ride, both riders and drivers have the opportunity to rate each other on a scale of 1 to 5 stars. Consistently high ratings help drivers receive more ride requests.'
            },
            {
                question: 'What support is available for drivers if issues arise during a trip?',
                answer: 'Drivers have access to 24/7 support through our app. You can reach out for assistance with navigation, rider issues, or emergencies during trips.'
            },
            {
                question: 'Are there any incentives or bonuses for drivers?',
                answer: 'We offer various incentives, bonuses, and promotions to reward drivers for high performance, completing a certain number of trips, or driving during peak times.'
            }
        ],
    openItems: {}
}">
    <h2>Frequently Asked Questions</h2>
    <div class="flex flex-col space-y-4 mt-4 justify-center items-center">
        <template x-for="(faq, i) in faqs" :key="i">
            <div x-data="{ open: openItems[i] || false }" class="text-sm border rounded-xl p-4 w-full">
                <div class="flex justify-between items-center" @click="openItems[i] = !openItems[i]; open = openItems[i]">
                    <div class="cursor-pointer font-semibold text-lg" x-text="faq.question"></div>
                    <div :class="{ 'rotate-180': open }" class="text-blue-800 transition-transform duration-300">
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
                    <div class="py-4 text-xs font-[400] leading-5 text-zinc-600 flex gap-2" x-text="faq.answer"></div>
                </div>
            </div>
        </template>
    </div>
</div>
