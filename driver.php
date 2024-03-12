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
          <a class="nav-link active" aria-current="page" href="#">Drive or deliver</a>
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
        <a class="btn btn-primary" href="auth/register.php">Register</a>
       
        
        <?php
                } else { ?>

        <a class="btn btn-primary" href="auth/logout.php">logout</a>

        <?php } ?>
       
      </div>
    </div>
  </div>
</nav>


<!-- SABIDRIVER PAGE -->

<div class="container-fluid SABIDRIVER mb-0">
  <div class="container SABIINNER">
    <div class="row">
        <div class="col-6">
            <h2>Make money driving<br>  with <span class="blue">sabi</span> ride.</h2>
            <p class="pt-2 text-white">Join our innovative ride-hailing platform and start earning today. <br> With flexible schedules, competitive rates, and a supportive community, driving with us is not just a job, it's a rewarding experience. <br> Sign up now and turn your wheels into wealth!</p>
        </div>
        <div class="col-6">
            <img src="./sabimages/Rectangle 56.png" alt="" class="mx-auto d-block pt-3">
        </div>
    </div>
  </div>
</div>
<div class="container FEATURES">
    <h3 class="fw-bold">Get Started</h3>
    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 g-5 m-2">
        <div class="col">
            <img src="./sabimages/Rectangle 64.png" alt="" width="70">
            <div class="pt-4">
                <h5 class="fw-bold pb-2">1. Sign up online</h5>
                <p>Signing up online is quick and easy. just provide a few details and gain access.</p>
            </div>
        </div>
        <div class="col">
            <img src="./sabimages/Rectangle 65.png" alt="" width="70">
            <div class="pt-4">
                <h5 class="fw-bold pb-2">2. Upload your documents </h5>
                <p>Speed up the verification process by uploading your document securely. our platform ensures a seamless experience allowing  you to submit your documents hassle-free.</p>
            </div>
        </div>
        <div class="col">
            <img src="./sabimages/Rectangle 66.png" alt="" width="70">
            <div class="pt-4">
                <h5 class="fw-bold pb-2">3. Get approved</h5>
                <p>start riding and making money on your own. submit your application today and experience the ease of approval. Get started now!.</p>
            </div>
        </div>
        <a href="#" class="">Apply to drive</a>
    </div>
</div>
<div class=" container PAGE">
    <div class="row">
        <div class="col-6 PAGEINNER">
            <h2 class="border">Be your own boss.<br>As you sabi drive,<br>you go sabi earn.</h2>
            <p class="pt-2 text-secondary">Join our unique ride-hailing platform and take control of your earnings. <br> With flexible hours and competitive rates, driving with us means maximizing your income while enjoying the freedom of being your own boss. <br> Sign up now and start earning!</p>
            <button class="btn btn-link p-4" type="button">Drive with Sabi Ride</button>
          </div>
        <div class="col-6">
            <img src="./sabimages/Rectangle 58.png" alt="" class="mx-auto d-block img-responsive">
        </div>
    </div>
</div>
<div class="container p-3 ACCORD">
    <h2 class="text-center fw-bold">Frequently Asked Questions </h2>
    <div class="accordion accordion-flush p-5" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            How do I sign up to become a driver
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Signing up is easy! Simply visit our website or download our app, fill out the required information, submit your documents for verification, and you'll be on your way to becoming a driver.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            What are the requirements to become a driver?
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Requirements may vary depending on your location, but generally, you need to have a valid driver's license, a clean driving record, and meet the minimum age requirement. Additional requirements may include vehicle specifications and insurance coverage.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              How much can I earn as a driver?
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Earnings vary depending on factors such as location, time of day, and demand. We offer competitive rates and incentives to help you maximize your earnings. The more you drive, the more you can earn!

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