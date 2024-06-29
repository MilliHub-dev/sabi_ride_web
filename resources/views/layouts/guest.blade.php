<!DOCTYPE html>
<html lang="en">
<head>
    <x-meta />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased text-zinc-900 scroll-smooth font-lato">
    <div class="h-screen flex flex-col sm:justify-center items-center pt-6 bg-white">
        {{ $slot }}
    </div>
    @livewireScripts
</body>
</html>