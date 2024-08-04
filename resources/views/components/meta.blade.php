<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="theme-color" content="white">
<meta name="description" content="Sabi Ride is a social ride hailing/sharing platform revolved around providing convenience, safety, and efficiency for riders and drivers.">
<meta name="author" content="Sabi Ride">
<meta name="keyword" content="Sabi, Sabi ride, Ride Hailing, Ride sharing, Rides, Car pooling, Car sharing, Cab, Taxi, Ride">
<link rel="icon" type="image/x-icon" href="/images/logo.png">
{{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->full() }}">
<meta property="og:title" content="@yield("title", config("app.name"))">
<meta property="og:locale" content="en_GB">
<meta property="og:description" content="@yield("description", "Sabi Ride is a social ride hailing/sharing platform revolved around providing convenience, safety, and efficiency for riders and drivers")">
<meta property="og:image" content="@yield("image", asset("images/og.jpg"))">
<meta name="twitter:url" content="{{ url()->full() }}">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:title" content="@yield("title", config("app.name"))">
<meta property="twitter:image" content="@yield("image", asset("images/og.jpg"))">
<meta property="twitter:description" content="@yield("description", "Sabi Ride is a social ride hailing/sharing platform revolved around providing convenience, safety, and efficiency for riders and drivers")">