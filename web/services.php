<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="bg-primary text-white py-3">
        <nav class="navbar navbar-expand-lg navbar-dark container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="Logo" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="hero text-center text-white d-flex align-items-center justify-content-center" style="background: url('images/hero-bg.jpg') no-repeat center center/cover; height: 100vh;">
        <div>
            <h1>Welcome to Our Website</h1>
            <a href="#" class="btn btn-warning mt-4">Get Started</a>
        </div>
    </section>

    <section class="services py-5 text-center">
        <div class="container">
            <h2 class="mb-5">Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="images/service1.jpg" class="card-img-top" alt="Service 1">
                        <div class="card-body">
                            <h3 class="card-title">Service 1</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="images/service2.jpg" class="card-img-top" alt="Service 2">
                        <div class="card-body">
                            <h3 class="card-title">Service 2</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="images/service3.jpg" class="card-img-top" alt="Service 3">
                        <div class="card-body">
                            <h3 class="card-title">Service 3</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-us py-5 text-center bg-light">
        <div class="container">
            <h2 class="mb-5">Why Choose Us</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="images/reason1.jpg" class="card-img-top" alt="Reason 1">
                        <div class="card-body">
                            <h3 class="card-title">Reason 1</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="images/reason2.jpg" class="card-img-top" alt="Reason 2">
                        <div class="card-body">
                            <h3 class="card-title">Reason 2</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="images/reason3.jpg" class="card-img-top" alt="Reason 3">
                        <div class="card-body">
                            <h3 class="card-title">Reason 3</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials py-5 text-center">
        <div class="container">
            <h2 class="mb-5">Testimonials</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="images/testimonial1.jpg" class="card-img-top" alt="Testimonial 1">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="images/testimonial2.jpg" class="card-img-top" alt="Testimonial 2">
                        <div class="card-body">
                            <h4 class="card-title">Jane Smith</h4>
                            <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="images/testimonial3.jpg" class="card-img-top" alt="Testimonial 3">
                        <div class="card-body">
                            <h4 class="card-title">Sam Wilson</h4>
                            <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Home</a></li>
                        <li><a href="#" class="text-white">About</a></li>
                        <li><a href="#" class="text-white">Services</a></li>
                        <li><a href="#" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h3>Follow Us</h3>
                    <a href="#"><img src="images/facebook.png" alt="Facebook" width="30"></a>
                    <a href="#"><img src="images/twitter.png" alt="Twitter" width="30"></a>
                    <a href="#"><img src="images/instagram.png" alt="Instagram" width="30"></a>
                </div>
            </div>
            <div class="footer-bottom mt-3">
                <p>&copy; 2024 Your Website. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
