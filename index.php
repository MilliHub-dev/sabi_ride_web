<?php
     require_once 'functions/helpers.php';
     require_once 'functions/pdo_connection.php';
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sabi Ride</title>
    <link rel="icon" type="image/x-icon" href="./sabimages/Sabi ride 3.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
   
  </head>
  <body>
    <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" i href="#"> <img src="./sabimages/Sabi ride 2.png" width="80px" alt=""></a>
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
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
      </ul>
      <div class="d-flex me-4 mb-1">
        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-globe me-1" style="font-size: 1.3rem; color: rgb(0, 0, 0);"></i>EN</a>
      </div>
      <div class="d-flex">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="signup.html">Help</a>
          </li>
          <?php 
                if (!isset($_SESSION['user'])) {
                    ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="auth/login.php">Login</a>
          </li>
         
        </ul>
        <button class="btn btn-primary" href="auth/register.php">Register</button>
       
        
        <?php
                } else { ?>

        <button class="btn btn-primary"" href="auth/logout.php">logout</button>

        <?php } ?>
       
      </div>
    </div>
  </div>
</nav>

<!-- CTA -->

<div class="container-fluid CTA">
  <div class="container CTAINNER">
    <h2>Anywhere wey you dey go,<br>we <span class="bluey">sabi</span> am.</h2>
    <p class="pt-2 text-white"> Sabi Ride hailing app is revolve around providing convenience, safety, and efficiency for both riders and drivers
      <br>Sabi Ride has shown novel ways in which
      technology can be employed in the carriage of
      persons and items 
      <br> thereby brought the
      efficiency of traditional taxis
    </p>
    <div class="d-flex gap-5">
      <button class="btn btn-link p-4" type="button">Take a ride With Sabi Ride</button>
      <button class="btn btn-link p-4" type="button">Drive with Sabi Ride</button>
    </div>
  </div>
</div>

<!-- CTATWO -->

<div class="container CTATWO mb-5">
  <img src="./sabimages/sabinus photo.png" alt="" class="mx-auto d-flex" width="100%">
  <div class="pt-4">
    <div class="row row-cols-lg-3 row-cols-md-1 row-cols-sm-1 g-4">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Rides</h5>
            <p class="card-text float-start"> Transportation service that allows passengers
              to request a ride from a location using a mobile app.</p>
            <img src="./sabimages/Rectangle 17.png" class="float-end pb-0" alt="" >
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Food Delivery</h5>
            <p class="card-text float-start">This is a service of bringing prepared meals directly to a customer's specified location.</p>
            <img src="./sabimages/Rectangle 18.png" class="float-end pb-0" alt="" >
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Groceries</h5>
            <p class="card-text float-start">This is a service of bringing 
              groceries directly to a customer's
              specified location.</p>
            <img src="./sabimages/Rectangle 19.png" class="float-end pb-0" alt="" >
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Logistics</h5>
            <p class="card-text float-start">This is a service of delivering
              items directly to a customer's
              specified location.</p>
            <img src="./sabimages/Rectangle 17.png" class="float-end pb-0" alt="" >
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Dispatch</h5>
            <p class="card-text float-start">This is a service of assigning and
              coordinating the pickup and delivery of small goods. </p>
            <img src="./sabimages/Rectangle 28.png" class="float-end pb-0" alt="" >
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">VIP Rides</h5>
            <p class="card-text float-start"> This service is designed to provide a higher level of comfort, luxury,
              and personalized experience to users.</p>
            <img src="./sabimages/Rectangle 31.png" class="float-end pb-0" alt="" >
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CTATHREE -->

<div class="container-fluid CTATHREE pt-4 mt-5">
  <div class="container">
    <div class="text-center first">
      <h3 class="display-6 fw-bold text-white pb-3">Earn Money With Sabi Ride</h3>
      <div class="text-center">
        <button class="btn btn-link mx-4 px-5" type="button">Driver</button>
        <button class="btn btn-link mx-4" type="button">Dispatch Rider</button>
      </div>
    </div>
    <div class="row pt-3">
      <div class="col-6">
        <h3 class="display-6 text-white fw-bold">Drive and Earn Money</h3>
        <div class="my-3">
          <div class="d-flex gap-3">
            <i class="bi bi-plus text-white" style="font-size: 1.8rem; color: rgb(255, 255, 255);"></i>
            <div class="d-grid">
              <h3 class="text-white pt-1">Drive more, Earn More.</h3>
              <p class="text-white">Make more money when you when you ride more</p>
            </div>
          </div>
        </div>
        <div class="my-3">
          <div class="d-flex gap-3">
            <i class="bi bi-plus text-white" style="font-size: 1.8rem; color: rgb(255, 255, 255);"></i>
            <div class="d-grid">
              <h3 class="text-white pt-1">Drive according to your schedule.</h3>
              <p class="text-white">Pick up passengers as schedule</p>
            </div>
          </div>
        </div>
        <div class="my-3">
          <div class="d-flex gap-3">
            <i class="bi bi-plus text-white" style="font-size: 1.8rem; color: rgb(255, 255, 255);"></i>
            <div class="d-grid">
              <h3 class="text-white pt-1">Get paid each day.</h3>
              <p class="text-white">Get paid anytime anyday</p>
            </div>
          </div>
        </div>
        <a href="#" class="Learn">Learn More</a>
      </div>
      <div class="col-6 mx-auto d-block">
        <img src="./sabimages/Rectangle 56.png" alt="" class="img-fluid">
      </div>
    </div>
  </div>
</div>

<!-- CTAFOUR -->

           
<div class="container CTAFOUR my-3">
  <div class="row News border">
    <div class="col-lg-6 col-md-6 col-sm-6">
      <h1 class="fw-bolder text-black">News and Updates</h1>
    </div>
    <div class="text-end col-6">
      <h3 class="pt-2 fw-bold">View All &nbsp; <i class="bi bi-globe"></i></h3>
    </div>
  </div>
  <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 g-4 m-2">
    
    <div class="row">
   
    <?php
                        $query = "SELECT * FROM posts WHERE status = 10";
                         $statement = $pdo->prepare($query);
                         $statement->execute();
                         $posts = $statement->fetchAll();
                         foreach ($posts as $post) { ?>
       <div class="col-lg-12 col-md-4 col-sm-6">
      <div class="card">
        <img src="<?= asset($post->image) ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title fw-bold"><?= $post->title ?></h5>
          <p class="card-text"><?= substr($post->body, 0, 0) ?></p>
          <p><a class="btn btn-primary" href="<?= url('detail.php?post_id=') . $post->id ?>" role="button">View details »</a></p>
        </div>
      </div>
      </div>
      <?php } ?>
    </div>
    
    
   
  </div>
</div>

<!-- CTAFIVE --> 

<div class="container-fluid CTAFIVE my-3">
  <div class="container scan">
    <h3 class="py-5">It's easier in the apps</h3>
    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 g-4">
      <div class="col-6 mx-auto d-block">
        <div class="card mb-3 p-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="./sabimages/Rectangle 38.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
               <img src="./sabimages/store-apple-logo-apple.png" width="100px" alt="">
                <p class="card-text">Scan to download</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 mx-auto d-block">
        <div class="card mb-3 p-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="./sabimages/Rectangle 38.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <img src="./sabimages/google-play-store-logo.png" width="100px" alt="">
                <p class="card-text">Scan to download</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- FOOTER --> 

<footer class="page-footer font-small blue py-4 my-3">
  <div class="container text-center text-md-left">

    <div class="row">
      <div class="col-md-3 mt-md-0 mt-3">
        <img src="./sabimages/Sabi ride 2.png" width="150" alt="">
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="fw-bold">Sabi Ride</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">Rides</a>
          </li>
          <li>
            <a href="#!">Food Delivery</a>
          </li>
          <li>
            <a href="#!">Dispatch </a>
          </li>
          <li>
            <a href="#!">Vip </a>
          </li>
        </ul>
      </div>

      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="fw-bold">Partner with Sabi Ride</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">sign up as driver</a>
          </li>
          <li>
            <a href="#!">Sign ypur car as vip</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="fw-bold">Company</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">About us</a>
          </li>
          <li>
            <a href="#!">News and Update</a>
          </li>
          <li>
            <a href="#!">Brand guidelines</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2023 Copyright:
    <a href="/"><img src="./sabimages/instagram.png" alt="" class="px-2" width="60"></a>
    <a href="/"><img src="./sabimages/facebook.png" alt="" class="px-2" width="60"></a>
    <a href="/"><img src="./sabimages/twitter.png" alt="" class="px-2" width="60"></a>
  </div>
</footer>








    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>