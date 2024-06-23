<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabi Ride</title>
    <link rel="icon" type="image/x-icon" href="../sabimages/Sabiride3.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/verification.css">
</head>

<body>
    <nav class="navbar sticky-top bg-body-tertiary navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php"> <img src="../sabimages/Sabi ride 2.png" width="100px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="driver.php">Drive or deliver</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ride</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog2.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                </ul>
                <div class="d-flex me-4 mb-1">
                    <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-globe me-1" style="font-size: 1.3rem; color: rgb(0, 0, 0);"></i>EN</a>
                </div>
                <div class="d-flex">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Help</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="sabi_login.php">Login</a>
                        </li>

                    </ul>
                    <button style="background-color: #0088CD; outline: none; border: 0; border-radius: 20px; height: 30px; padding: 0 10px; margin-top: 5px;"><a href="driver.php" style="text-decoration: none; color: #fff;">Sign up</a></button>

                </div>
            </div>
        </div>
    </nav>

    <section class="hero text-center text-white d-flex align-items-center justify-content-center" style="background: url('../sabimages/serv.jpg') no-repeat center center/cover; height: 100vh;">
        <div>

        </div>
        <div class=" servicecaption card text-bg-dark w-75 mx-5">
            <div class="card-body">
                <h1>Welcome to Our Service</h1>
                <a href="driver.php" class="btn btn-success mt-4">Get Started</a>
            </div>
        </div>
    </section>

    <section class="services py-5 text-center service-card">
        <div class="container">
            <h2 class="mb-5 text-dark-50 display-2">Our Services</h2>
            <div class="row g-3 align-items-center justify-content-center">
                <div class="col-sm-3 col-md-6 col-xl-4 col-xxl-3 ">
                    <div class="card shadow-sm">
                        <!-- <img src="../sabimages/Ridehailing.jpg" class="card-img-top" alt="Service 1"> -->
                        <div class="card-body">
                            <h3 class="card-header">Ride Hailing</h3>
                            <p class="card-text float-start">Ride-hailing is a transportation service that allows passengers to request a ride from a location using a mobile app, connecting them with drivers who use their own vehicles to provide the service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-6 col-xl-4 col-xxl-3">
                    <div class="card shadow-sm">
                        <!-- <img src="../sabimages/dispatch.png" class="card-img-top" alt="Service 2"> -->
                        <div class="card-body">
                            <h3 class="card-title">Dispatch</h3>
                            <p class="card-text">Dispatch ride refers to the process of assigning and coordinating the pickup and delivery of goods or passengers to specific vehicles or drivers within a transportation or ride-hailing service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-6 col-xl-4 col-xxl-3">
                    <div class="card shadow-sm">
                        <!-- <img src="../sabimages/food-delivery.jpg" class="card-img-top" alt="Service 3"> -->
                        <div class="card-body">
                            <h3 class="card-title">Food delivery</h3>
                            <p class="card-text">A VIP ride refers to a premium or exclusive transportation service designed to provide a higher level of comfort, luxury, and personalized experience to passengers, often at a premium price.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-6 col-xl-4 col-xxl-3">
                    <div class="card shadow-sm">
                        <!-- <img src="../sabimages/vip1.jpg" class="card-img-top" alt="Service 3"> -->
                        <div class="card-body">
                            <h3 class="card-title">VIP Ride</h3>
                            <p class="card-text">A VIP ride refers to a premium or exclusive transportation service designed to provide a higher level of comfort, luxury, and personalized experience to passengers, often at a premium price.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-6 col-xl-4 col-xxl-3">
                    <div class="card shadow-sm">
                        <!-- <img src="../sabimages/Groceries.png" class="card-img-top" alt="Service 3"> -->
                        <div class="card-body">
                            <h3 class="card-title">Groceries</h3>
                            <p class="card-text">Food delivery is the service of bringing prepared meals, groceries, or restaurant dishes directly to a customer's specified location, typically using a delivery driver or courier.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-6 col-xl-4 col-xxl-3">
                    <div class="card shadow-sm">
                        <!-- <img src="../sabimages/ride sharing.jpg" class="card-img-top" alt="Service 3"> -->
                        <div class="card-body">
                            <h3 class="card-title">Ride Sharing</h3>
                            <p class="card-text"> sabi Ride Sharing your reliable ride-sharing companion. Whether you're commuting to work, heading to a social event, or exploring the city, Sabi Ride offers a seamless, convenient, and affordable way to get around.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-us py-5 text-center">
        <div class="container">
            <h2 class="mb-5 text-dark-50 display-2">Why Choose Us</h2>
            <div class="row g-3">
                <div class="col-md-6 col-xl-4 col-xxl-3 serviceCard text-start">
                    <div class="card shadow-sm">
                        <img src="../sabimages/Community.png" class="card-img-top" alt="Reason 1">
                        <div class="card-body">
                            <h3 class="card-title">Community Engagement</h3>
                            <p class="card-text">We believe in fostering strong community connections. Our social ride-hailing service is designed to bring people together. By sharing rides with neighbors and fellow commuters, you can make new friends, share stories, and build a sense of community. Experience the joy of connecting with others while traveling to your destination.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3 serviceCard">
                    <div class="card shadow-sm">
                        <img src="../sabimages/ride.jpg" class="card-img-top" alt="Reason 2">
                        <div class="card-body">
                            <h3 class="card-title">Cost-Efficiency through Ride Sharing</h3>
                            <p class="card-text">Save money and reduce your carbon footprint by opting for our ride-sharing options. Sabi Ride offers shared rides that allow you to split the cost with other passengers heading in the same direction. Enjoy affordable rates without compromising on comfort, while contributing to a more sustainable environment by reducing the number of vehicles on the road.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3 serviceCard">
                    <div class="card shadow-sm">
                        <img src="../sabimages/Social.jpeg" class="card-img-top" alt="Reason 3">
                        <div class="card-body">
                            <h3 class="card-title">Enhanced Social Experience</h3>
                            <p class="card-text">Sabi Ride isn't just about getting from point A to point B; it's about the journey and the people you meet along the way. Our platform encourages social interaction, making your rides more enjoyable and engaging. Whether you're carpooling with colleagues or sharing a ride with fellow event-goers, Sabi Ride turns ordinary commutes into memorable experiences.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <div class="row g-3">
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <h3>About Us</h3>
                    <p>Sabi Ride is a social ride hailing/sharing platform revolve around providing convenience, safety, and efficiency for both riders and drivers. Sabi ride driven by safety, fueled by convenience.</p>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                        <li><a class="text-decoration-none text-white" href="../index.php" class="text-white">Home</a></li>
                        <li><a class="text-decoration-none text-white" href="about.php" class="text-white">About</a></li>
                        <li><a class="text-decoration-none text-white" href="services.php" class="text-white">Services</a></li>

                    </ul>
                </div>
                <div class="col-md-4 mb-3 text-decoration-none">
                    <h3>Follow Us</h3>
                    <a href="https://www.facebook.com/profile.php?id=61553823904645"><img src="../sabimages/facebook.png" alt="Facebook" width="30"></a>
                    <a href="https://x.com/sabiride"><img src="../sabimages/twitter.png" alt="Twitter" width="30"></a>
                    <a href="https://www.instagram.com/sabiride.ng?utm_source=qr&igsh=MWg5bXR4MnE2ODljZw=="><img src="../sabimages/instagram.png" alt="Instagram" width="30"></a>
                </div>
            </div>
            <div class="footer-bottom mt-3">
                <p>&copy; 2024 Sabi Ride. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
