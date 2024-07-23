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
                <div class="p-4 md:p-8 lg:p-16">
                    <h1 class="text-3xl font-bold mb-4">Privacy Policy</h1>
                    <section class="mb-8">
                        <p class="mb-4"><b>Last Updated:</b> 7th June, 2024</p>
                    </section>
                    <section class="mb-8">
                        <h2 class="text-xl font-bold mb-4">- Introduction</h2>
                        <p class="mb-4">
                            This privacy policy describes how and why we might collect, store, use, and process your information when you use our services. When you use SabiRide and any of its other services, you trust us with your personal data. We are committed to keeping that trust.
                        </p>
                    </section>
                    <section class="mb-8">
                        <h2 class="text-xl font-bold mb-4">- Collected Data</h2>
                        <p class="mb-4"><b>The sources of the data collected and processed by SabiRide include:</b></p>
                        <ul class="list-disc pl-6 mb-4">
                            <li>User provided data</li>
                            <li>Service usage data</li>
                        </ul>
                        <h3 class="text-lg font-bold mb-4">User Provided Data:</h3>
                        <p class="mb-4"><b>Account Information:</b> This includes first and last name, email, phone number, login name and password, address, profile picture, payment or banking information (including related payment verification information), user settings (including accessibility settings).</p>
                        <p class="mb-4"><b>Verification Information:</b> This includes government issued identification such as passport, user-submitted photos such as selfies and profile pictures, proof of car ownership, driver license, certificate of roadworthiness.</p>
                        <p class="mb-4"><b>User Content:</b> This includes chat logs and recordings when users contact customer support, provide ratings, or use the in-app messenger.</p>
                        <h3 class="text-lg font-bold mb-4">Service Usage Data:</h3>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Geolocation data</li>
                            <li>Transaction information</li>
                        </ul>
                    </section>
                    <section class="mb-8">
                        <h2 class="text-xl font-bold mb-4">- How We Use Data</h2>
                        <p class="mb-4">
                            <b>In Short:</b> We process your information to provide, improve, and administer our Services, communicate with you, for security and fraud prevention, and to comply with law. We may also process your information for other purposes with your consent.
                        </p>
                        <p class="mb-4"><b>To provide our service:</b></p>
                        <ul class="list-disc pl-6 mb-4">
                            <li>To connect you with a driver</li>
                            <li>To connect you with other ride sharers</li>
                            <li>To use geo-location data to plan your routes to be convenient and cheapest</li>
                            <li>To collect payments</li>
                            <li>To keep you informed about our service updates</li>
                        </ul>
                    </section>
                    <section class="mb-8">
                        <h2 class="text-xl font-bold mb-4">- When and With Whom Do We Share Your Personal Information?</h2>
                        <p class="mb-4">
                            <b>In Short:</b> We may share information in specific situations described in this section and/or with the following third parties.
                        </p>
                        <p class="mb-4"><b>We may need to share your personal information in the following situations:</b></p>
                        <ul class="list-disc pl-6 mb-4">
                            <li><b>Business Transfers:</b> We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.</li>
                            <li><b>Affiliates:</b> We may share your information with our affiliates, in which case we will require those affiliates to honor this privacy notice. Affiliates include our parent company and any subsidiaries, joint venture partners, or other companies that we control or that are under common control with us.</li>
                            <li><b>Business Partners:</b> We may share your information with our business partners to offer you certain products, services, or promotions.</li>
                        </ul>
                    </section>
                    <section class="mb-8">
                        <h2 class="text-xl font-bold mb-4">- How Long Do We Keep Your Information?</h2>
                        <p class="mb-4">
                            <b>In Short:</b> We keep your information for as long as necessary to fulfil the purposes outlined in this privacy notice unless otherwise required by law.
                        </p>
                        <p class="mb-4">
                            We will only keep your personal information for as long as it is necessary for the purposes set out in this privacy notice, unless a longer retention period is required or permitted by law (such as tax, accounting, or other legal requirements). When we have no on-going legitimate business need to process your personal information, we will either delete or anonymize such information, or, if this is not possible (for example, because your personal information has been stored in backup archives), then we will securely store your personal information and isolate it from any further processing until deletion is possible.
                        </p>
                    </section>
                    <section class="mb-8">
                        <h2 class="text-xl font-bold mb-4">- Do We Collect Information From Minors?</h2>
                        <p class="mb-4">
                            <b>In Short:</b> We do not knowingly collect data from or market to children under 18 years of age.
                        </p>
                        <p class="mb-4">
                            We do not knowingly collect, solicit data from, or market to children under 18 years of age, nor do we knowingly sell such personal information. By using the Services, you represent that you are at least 18 or that you are the parent or guardian of such a minor and consent to such minor dependent’s use of the Services. If we learn that personal information from users less than 18 years of age has been collected, we will deactivate the account and take reasonable measures to promptly delete such data from our records. If you become aware of any data we may have collected from children under age 18, please contact us at………
                        </p>
                    </section>
                    <section class="mb-8">
                        <h2 class="text-xl font-bold mb-4">- How Can You Review, Update, or Delete the Data We Collect From You?</h2>
                        <p class="mb-4">
                            Based on the applicable laws of your country, you may have the right to request access to the personal information we collect from you, details about how we have processed it, correct inaccuracies, or delete your personal information. You may also have the right to withdraw your consent to our processing of your personal information. These rights may be limited in some circumstances by applicable law. To request to review, update, or delete your personal information, please contact …… 
                        </p>
                    </section>
                    
                    <section class="mb-8">
                        <h1 class="text-3xl font-bold mb-4">Sabi Ride Terms of Engagement for Riders</h1>
                        <p class="mb-4">Sabi Ride offers a platform for riders to connect with drivers for transportation services. By using Sabi Ride, you agree to these Terms.</p>
                        <h2 class="text-xl font-bold mb-4">- Definitions</h2>
                        <ul class="list-disc pl-6 mb-4">
                            <li><b>"Sabi Ride"</b> or <b>"we"</b> refers to SabiRide</li>
                            <li><b>"Rider"</b> or <b>"you"</b> refers to the individual using the Sabi Ride platform.</li>
                            <li><b>"Driver"</b> refers to the individual providing transportation services.</li>
                            <li><b>"Services"</b> include rides and other features offered through the Sabi Ride platform.</li>
                        </ul>
                        <h2 class="text-xl font-bold mb-4">- Use of Services</h2>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Riders must be at least 18 years old.</li>
                            <li>You are responsible for maintaining your account and password.</li>
                            <li>You agree to provide accurate information and update it as necessary.</li>
                            <li>Sabi Ride prioritizes safety. Report any incidents or concerns to our support team.</li>
                            <li>Be respectful and courteous to drivers and fellow riders.</li>
                            <li>No smoking, alcohol consumption, or drug use is allowed in vehicles.</li>
                            <li>Book rides through the Sabi Ride app.</li>
                            <li>Cancellations are subject to fees, unless otherwise stated.</li>
                        </ul>
                        <h2 class="text-xl font-bold mb-4">- Payment and Pricing</h2>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Fares are calculated based on distance, time, and demand.</li>
                            <li>Payment methods include credit/debit cards, digital wallets, and cash. Subject to review by Sabiride*</li>
                        </ul>
                        <h2 class="text-xl font-bold mb-4">- Privacy</h2>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Sabi Ride collects and processes personal data in accordance with our Privacy Policy.</li>
                        </ul>
                        <h2 class="text-xl font-bold mb-4">- Lost Property and Dispute Resolution</h2>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Riders are responsible for their personal belongings.</li>
                            <li>Sabi Ride will attempt to reunite lost items with their owners.</li>
                            <li>Report issues or complaints through the app.</li>
                            <li>Sabi Ride will investigate and resolve disputes fairly and promptly. </li>
                            <li>Sabi Ride is not liable for damages or losses arising from Services.</li>
                            <li>Drivers are responsible for maintaining valid insurance.</li>
                        </ul>
                        <h2 class="text-xl font-bold mb-4">- Governing Law and Jurisdiction</h2>
                        <p class="mb-4">
                            These Terms are governed by and construed in accordance with (for the lawyer/company’s legal to edit)
                        </p>
                        <h2 class="text-xl font-bold mb-4">- Changes to Terms</h2>
                        <p class="mb-4">
                            Sabi Ride reserves the right to update or modify these Terms without notice.
                        </p>
                        <h2 class="text-xl font-bold mb-4">- Contact Us</h2>
                        <p class="mb-4">
                            For questions, concerns, or feedback, please contact our support team at (insert SabiRide contact information)
                        </p>
                        <p class="mb-4">
                            Please review and modify it according to your specific requirements and legal advice.
                        </p>
                    </section>
                </div>                
            </div>
        </div>
    </div>
</div>
