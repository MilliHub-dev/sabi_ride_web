<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;


new #[layout('layouts.home')] class extends Component
{

    public function mount()
    {
    }
}; 
?>

<div>
    <x-verification.navigation />
    <div class="h-44 bg-primary w-full center">
        <h1 class="font-bold">About SabiRide</h1>
    </div>
    <x-body>
        <div class="border mt-5 p-5 md:p-8 rounded-2xl bg-gray-50 w-full">
            <h3>What are we</h3>
            <div class="mt-5 text-sm opacity-80">
                We're to Sabi Ride – your trusted partner in modern transportation solutions. At Sabi Ride, we believe that getting from point A to point B should be more than just a journey; it should be an experience characterized by comfort, efficiency, and style. Our mission is to revolutionize how you travel by combining innovative technology with exceptional service.
            </div>
        </div>

        <div class="border mt-5 p-5 md:p-8 rounded-2xl bg-gray-50 w-full">
            <h3>Our Story</h3>
            <div class="mt-5 text-sm opacity-80">
                Founded with a vision to redefine travel, Sabi Ride emerged from a passion for seamless and sophisticated transportation. Our journey began with a simple idea: to create a transportation solution that caters to the needs of today’s fast-paced world while maintaining a commitment to sustainability and excellence. Over the years, our dedication to innovation and customer satisfaction has allowed us to grow into a leading provider of high-quality travel solutions.
            </div>
        </div>

        <div class="border mt-5 p-5 md:p-8 rounded-2xl bg-gray-50 w-full">
            <h3>Our Mission</h3>
            <div class="mt-5 text-sm opacity-80">
                At Sabi Ride, our mission is to offer unparalleled transportation services that exceed our customers’ expectations. 
            </div>
        </div>


        <div class="border mt-5 p-5 md:p-8 rounded-2xl bg-gray-50 w-full">
            <h3>We strive to:</h3>
            <ul class="list-disc pl-6 mt-5 text-sm opacity-80 space-y-7">
                <li><strong>Innovate Continuously</strong>: We invest in cutting-edge technology and modern design to ensure that our vehicles and services are always at the forefront of the industry.</li>
                <li><strong>Prioritize Comfort and Safety</strong>: Your comfort and safety are our top priorities. We meticulously design and maintain our vehicles to provide a smooth, secure, and enjoyable travel experience.</li>
                <li><strong>Champion Sustainability</strong>: We are committed to reducing our environmental footprint. Our fleet includes energy-efficient vehicles, and we actively seek out eco-friendly practices to support a greener planet.</li>
                <li><strong>Deliver Exceptional Service</strong>: From the moment you book a ride to the time you reach your destination, we are dedicated to providing top-notch customer service. Our professional drivers and support staff are trained to ensure your journey is pleasant and stress-free.</li>
            </ul>            
        </div>
        <div class="border mt-5 p-5 md:p-8 rounded-2xl bg-gray-50 w-full">
            <h3>Our Fleet</h3>
            <div class="mt-5 text-sm opacity-80 space-y-2">
                <p>Our diverse fleet is designed to cater to a variety of travel needs. Whether you’re looking for a sleek executive car for business trips, a spacious SUV and Sudan. </p>
                <p>Sabi Ride has you covered. Each vehicle in our fleet is equipped with state-of-the-art features to enhance your travel experience, including advanced navigation systems, comfortable seating, and high-quality entertainment options.Our TeamThe heart of Sabi Ride is our team of passionate professionals. </p>
                <p>Our drivers are highly skilled, courteous, and dedicated to providing a superior travel experience. Behind the scenes, our customer support team works tirelessly to ensure that every aspect of your journey is handled with care and efficiency. Together, we are committed to making every ride with Sabi Ride a memorable one.</p>
            </div>
        </div>
        <div class="border mt-5 p-5 md:p-8 rounded-2xl bg-gray-50 w-full">
            <h3>Why Choose Us?</h3>
            <div class="mt-5 text-sm opacity-80 space-y-2">
                <p>Choosing Sabi Ride means choosing a commitment to excellence. Our attention to detail, focus on innovation, and dedication to customer satisfaction set us apart. </p>
                <p>We understand that every journey is unique, and we tailor our services to meet your specific needs.</p>
            </div>
        </div>
        <div class="border mt-5 p-5 md:p-8 rounded-2xl bg-gray-50 w-full">
            <h3>Contact Us</h3>
            <div class="mt-5 text-sm opacity-80 space-y-1">
                <p>We invite you to experience the Sabi Ride difference for yourself. </p>
                <p>For bookings, inquiries, or feedback, please reach out to us through our website or contact our customer service team.</p>
                <p>We look forward to serving you and making every journey with Sabi Ride a pleasure.Thank you for choosing Sabi Ride – where your journey is our passion.</p>
            </div>
        </div>
    </x-body>
</div>