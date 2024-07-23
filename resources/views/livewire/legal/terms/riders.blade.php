<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.home')] class extends Component
{
   
}; ?>

<div>
    @section('title', 'Terms of use')
    <div class="fixed w-full">
        <x-verification.navigation />
    </div>
    <div class="flex flex-col py-10 pt-24 items-center gap-6 max-w-4xl mx-auto">
        <div class="bg-white w-full  text-zinc-800">
            <div class="p-4 md:p-8 lg:p-16">
                <h1 class="text-3xl font-bold mb-4">Sabi Ride Terms of Engagement for Riders</h1>
                <p class="mb-4">Last updated: June 23rd, 2024</p>
                
                <section class="mb-8">
                    <h2 class="text-xl font-bold mb-4">Introduction</h2>
                    <p class="mb-4">Sabi Ride offers a platform for riders to connect with drivers for transportation services. By using Sabi Ride, you agree to these Terms.</p>
                    <ul class="list-disc pl-5 mb-4">
                        <li>"Sabi Ride" or "we" or “The company” refers to SabiRide.</li>
                        <li>"Rider" or "you" refers to the individual using the Sabi Ride platform.</li>
                        <li>"Driver" refers to the individual providing transportation services.</li>
                        <li>"Services" include rides and other features offered through the Sabi Ride platform.</li>
                    </ul>
                </section>
                
                <section class="mb-8">
                    <h2 class="text-xl font-bold mb-4">Registration and Eligibility</h2>
                    <p class="mb-4">You may not register on this Site if you are under 18 years of age. Any access to or use of our Website or our Services by anyone under 18 is unauthorized, unlicensed, and in violation of these Terms and Conditions. By accessing or using the Site, you represent and warrant that you are 18 or older.</p>
                    <p class="mb-4">In addition to the above, registration and/or sign up as a Rider on this Site shall only be conducted by individuals who can form legally binding contracts under Applicable Laws.</p>
                    <p class="mb-4">To access this Site, You may be asked to provide certain registration information/documents. You are required to provide accurate and complete information.</p>
                    <p class="mb-4">It is a condition of Your use that all the information You provide on this Site will be accurate, current, and complete. If the Company believes that the information You provide is not correct, or complete, the Company has the right to refuse You access to this Site or any of its resources, and to terminate or suspend Your access at any time.</p>
                    <p class="mb-4">Notwithstanding Your provision of the information required by the Company, access to the Site or the Services remains at the discretion of the Company.</p>
                </section>
                
                <section class="mb-8">
                    <h2 class="text-xl font-bold mb-4">Access</h2>
                    <p class="mb-4">To access some of the Services on the site, you may be required to register an Account. When You register for the Account and from time to time thereafter, we may require You to provide and/or confirm information documentation that will allow Us to identify You such as;</p>
                    <ul class="list-disc pl-5 mb-4">
                        <li>Your name;</li>
                        <li>Email address;</li>
                        <li>Mobile device number;</li>
                        <li>Such other information and documentation that we may require from time to time.</li>
                    </ul>
                </section>
                
                <section class="mb-8">
                    <h2 class="text-xl font-bold mb-4">Use of Services</h2>
                    <ul class="list-disc pl-5 mb-4">
                        <li>You are responsible for maintaining your account and password.</li>
                        <li>You agree to provide accurate information and update it as necessary.</li>
                        <li>Sabi Ride prioritizes safety. Report any incidents or concerns to our support team.</li>
                        <li>Be respectful and courteous to drivers and fellow riders.</li>
                        <li>No smoking, alcohol consumption, or drug use is allowed in vehicles.</li>
                        <li>Book rides through the Sabi Ride app.</li>
                        <li>Cancellations are subject to fees, unless otherwise stated.</li>
                    </ul>
                </section>
                
                <section class="mb-8">
                    <h2 class="text-xl font-bold mb-4">Payment and Pricing</h2>
                    <ul class="list-disc pl-5 mb-4">
                        <li>Fares are calculated based on distance, time, and demand.</li>
                        <li>Payment methods include credit/debit cards, digital wallets, and cash (in select areas). Subject to review by SabiRide*</li>
                    </ul>
                </section>
                
                <section class="mb-8">
                    <h2 class="text-xl font-bold mb-4">Privacy</h2>
                    <p class="mb-4">Sabi Ride collects and processes personal data in accordance with our Privacy Policy. (Refer to privacy policy available on The Company website)</p>
                </section>
                
                <section class="mb-8">
                    <h2 class="text-xl font-bold mb-4">Lost Property and Dispute Resolution</h2>
                    <ul class="list-disc pl-5 mb-4">
                        <li>Riders are responsible for their personal belongings.</li>
                        <li>Sabi Ride will attempt to reunite lost items with their owners.</li>
                        <li>Report issues or complaints through the app.</li>
                        <li>Sabi Ride will investigate and resolve disputes fairly and promptly.</li>
                        <li>Sabi Ride is not liable for damages or losses arising from Services.</li>
                    </ul>
                </section>
                
                <section class="mb-8">
                    <h2 class="text-xl font-bold mb-4">Availability of the Services</h2>
                    <p class="mb-4">Although we aim to offer You the best service possible, we make no promise that the Services will meet Your requirements. We cannot guarantee that the Services will be fault-free. If a fault occurs with the Services You should report it to admin@sabi-ride.com.ng and we will attempt to correct the fault as soon as we reasonably can.</p>
                </section>
                
                <section class="mb-8">
                    <h2 class="text-xl font-bold mb-4">Licence and Use of the Service</h2>
                    <p class="mb-4">Subject to your compliance with the Terms and Conditions, We grant you a limited, non-exclusive, non-sublicensable, revocable and non-transferable licence to; access and use the Services in the Territory: access and use any content, information and related materials that may be made available to You through the Site, in each case, solely for Your use.</p>
                    <p class="mb-4">You must not use the Site in connection with prohibited use or other illegal activity including but not limited to money-laundering, fraud and the funding of terrorist organizations. If we reasonably believe You are using the Site in connection with illegal activity or for any fraudulent purpose, or are permitting a third party to do so, we shall report You to the appropriate legal authorities.</p>
                    <ul class="list-disc pl-5 mb-4">
                        <li>Comply with these Terms and Conditions as well as any Applicable Laws, rules or regulations;</li>
                        <li>Provide confirmation of any information You provide to us, including proof of identity;</li>
                        <li>Co-operate in any investigation that we reasonably carry out, or that is carried out by any law enforcement agency, government agency or regulatory authority;</li>
                        <li>Not provide false, inaccurate or misleading information; and</li>
                        <li>Not use an anonymising proxy.</li>
                    </ul>
                    <p class="mb-4">Provided it would not be unlawful for us to do so, and it would not compromise reasonable security measures, we will contact You by phone or email if there is an actual or suspected fraud affecting Your use of the Site.</p>
                    <p class="mb-4">You hereby authorise Us to share, receive, and use data/information collected from your use of the Services with other affiliated third parties.</p>
                    <p class="mb-4">You acknowledge and agree that specific components of the Services shall be governed in accordance with the standard terms and conditions imposed by our third-party partners or the Company (as the case may be) and you shall be bound by such terms in the relevant agreements with the Company or our third party partners.</p>
                </section>
                
                <section class="mb-8">
                    <h2 class="text-xl font-bold mb-4">Changes to Terms</h2>
                    <p class="mb-4">Sabi Ride reserves the right to update or modify these Terms without notice.</p>
                </section>
                
                <section class="mb-8">
                    <h2 class="text-xl font-bold mb-4">Governing Law and Jurisdiction</h2>
                    <p class="mb-4">These Terms are governed by and construed in accordance with the laws of Nigeria.</p>
                </section>
                
                <section class="mb-8">
                    <h2 class="text-xl font-bold mb-4">Contact Us</h2>
                    <p class="mb-4">For questions, concerns, or feedback, please contact our support team at <a href="mailto:admin@sabi-ride.com.ng" class="text-primary">admin@sabi-ride.com.ng</a>.</p>
                </section>
            </div>
        </div>
    </div>
</div>
