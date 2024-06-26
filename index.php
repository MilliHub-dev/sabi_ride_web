<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sabi Ride</title>
  <link rel="icon" type="image/x-icon" href="./sabimages/Sabiride3.png">
  <!-- <link rel="stylesheet" href="./style/loader.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./style/verification.css">
  <link rel="stylesheet" href="./style/main.css">
  <link rel="stylesheet" href="./style/boostrap_overrides.css">


</head>

<!-- loader -->
<!-- <div id="loader">
    <div class="loader-content">
      <img src="./sabimages/Sabiride3.png" alt="Loading..." class="spinning-image">

    </div>
  </div> -->

<body>

  <!-- Page Hero -->
  <div class="bgimg-1 parallax">
    <!-- NAVBAR -->
    <nav class=" navbar navbar-expand-lg ps-4 ps-md-5 mt-0 pt-0">
      <div class="container-fluid">
        <!-- Mobile NAV Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- brand-logo -->
        <a class="navbar-brand bg-transparent" href="index.php"> <img src="./sabimages/Sabi ride 2.png" alt="Logo" width="150px" class="d-inline-block align-text-top text-white">
        </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <img class="offcanvas-title bg-transparent" id="offcanvasNavbarLabel" src="./sabimages/Sabi ride 2.png" alt="Logo" width="150px" class="d-inline-block align-text-top text-white"></img>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-start flex-grow-1 justify-content-end ms-3">
              <li class="nav-item">
                <a class="nav-link active " href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="web/driver.php">Drive or deliver</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Ride</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="web/blog2.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="web/about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="web/services.php">Services</a>
              </li>
            </ul>


          </div>
        </div>
    </nav>
    <!-- Hero -->
    <div class="container-fluid ps-4 ps-md-5 mt-0">
      <div class="row g-2 justify-content-start mt-0">
        <div class="col-8">
          <div class="brandcaption">
            <span class="text-start text-white">Anywhere you dey go,<br>we <span class="bluey" id="sabi">sabi</span> am.</span>
          </div>
        </div>
        <div class="col-10 justify-content-start mt-5">
          <div class="lead-caption">
            <div class="text-start text-white text-wrap text-justify"> Sabi Ride is a social ride hailing/sharing platform revolved around providing convenience, safety, and efficiency for both riders and drivers. Sabi ride is driven by safety, fueled by convenience.
            </div>
          </div>
        </div>
        <div class="d-flex  mb-5 gap-3 py-3 flex-row flex-wrap">
          <button class="btn btn-sm btn-light d-flex flex-row align-items-center justify-content-center text-nowrap" type="button"> <a href="web/driver.php">Become a Driver</a>    <i href="web/driver.php "  class="bi bi-chevron-right style=" font-size: 2rem;" aria-hidden="true"></i></button>
          <span class="me-md-auto"></span>
          <button class="btn btn-sm btn-dark text-nowrap d-flex flex-row justify-content-between text-white" type="button"><i class="bi bi-apple" style="font-size: 2rem;" aria-hidden=" true"></i><span class="d-flex flex-column align-items-center pe-2"><small>Download on the</small> App Store</span></button>
          <button class="btn btn-sm btn-dark text-nowrap  d-flex flex-row justify-content-between text-white" type="button"><i class="bi bi-play" style="font-size: 2rem;" aria-hidden=" true"></i><span class="d-flex flex-column align-items-center pe-2"><small>Download on the</small> Play Store</span></button>
        </div>
      </div>

    </div>
  </div>


  <!-- Service Heading -->
  <div class="container-fluid mt-4 ps-4 ps-md-5 ">
    <div class="row justify-content-center">
      <div class="col-12 g-2 ">
        <h3 class="text-start display-4 fw-bold">Our services</h3>
        <p>Our In-app services stretch out to serve other transportation needs.</p>
      </div>
    </div>
    <!-- Serivce cards -->
    <div class="mt-2">
      <div class="container-fluid services">
        <div class="row gy-2 justify-content-between">
          <div class=" col-6 col-md-4">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Rides</h5>
                <p class="card-text float-start"> Set location, offer price start trip </p>
                <img src="./img/rides.png" class="float-end" alt="Rides">
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Dispatch</h5>
                <p class="card-text float-start">Swift order delivery with our riders. </p>
                <img src="./img/dispatch.png" class="float-end" width="120px" alt="Dispatch">
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Group Rides</h5>
                <p class="card-text float-start">Coordinate group rides with friends and family</p>
                <img src="./img/group_ride.png" class="float-end" alt="Group Rides">
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">VIP Rides</h5>
                <p class="card-text float-start "> You prioritize comfort and your luxury, </p>
                <img src="./img/vip_ride.png" class="float-end" alt="VIP">
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Logistics</h5>
                <p class="card-text float-start">We cover logistics for SMEs.</p>
                <img src="./img/logistics.png" class="float-end" alt="Logistics">
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Groceries</h5>
                <p class="card-text float-start">Order from your favourite stores</p>
                <img src="./img/groceries.png" class="float-end" alt="Groceries">
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>

  <!-- Info icons -->
  <!-- <section class="rel container-fluid mt-4">
    <div class="row g-2 justify-content-between align-items-start">
      <div class="col-6 d-flex flex-column align-items-center justify-content-center ">
        <span class="icon mdi mdi-flag-variant badge rounded-pill bg-info ">
          24K
        </span>
        <p class=" ">Customers</p>
      </div>
      <div class="col-6 d-flex flex-column align-items-center justify-content-center">
        <span class="icon mdi mdi-car badge rounded-pill bg-info">250
        </span>
        <p class="">Total Rides</p>
      </div>

      <div class="col-6 d-flex flex-column align-items-center justify-content-center">
        <span class="icon mdi mdi-coin badge rounded-pill bg-info">
          231k
        </span>
        <p class="">Active Ride</p>
      </div>
      <div class="col-6 d-flex flex-column align-items-center justify-content-center">
        <span class="icon mdi mdi-account badge rounded-pill bg-info">17</span>
        <p class="">Drivers</p>
      </div>
    </div>
  </section> -->

  <!-- Hero2 -->
  <div class="container p-3">
    <div class="bgimg-2 text-center mt-4 mb-5">
    </div>
  </div>
  <!-- Service DESC -->
  <div class="container-fluid">
    <div class="row g-5 justify-content-center">
      <div class="col-12">
        <h3 class="display-6 fw-bold text-center mt-0">
          Earn Money With <span id="sabi">sabi</span> Ride
        </h3>
      </div>
    </div>
    <div class="d-flex justify-content-center gap-5 mt-4">
      <button class="btn btn-md btn-shadow btn-primary" type="button">Driver</button>
      <button class="btn btn-md btn-shadow btn-primary" type="button">Dispatch Rider</button>
    </div>

    <div class="d-flex gap-5 flex-row justify-content-center mt-4">

      <div class="ms-3">
        <div class="d-flex gap-3">
          <div class="numpill">1</div>
          <div class="d-flex flex-column">
            <h3 class="fw-bold">Drive more, Earn More.</h3>
            <p class="">With a large number of requests coming daily, you stand to get more</p>
          </div>
        </div>

        <div class="d-flex gap-3">
          <div class="numpill">2</div>
          <div class="d-flex flex-column">
            <h3 class="fw-bold">Drive according to your schedule.</h3>
            <p class="">Go online and offline whenever you want, because you rule your schedule.</p>
          </div>
        </div>
        <div class="d-flex gap-3">
          <div class="numpill">3</div>
          <div class="">
            <h3 class="fw-bold">Dispatch Rider</h3>
            <p class="">Do not wait for a weekly or monthly paycheck, Get it daily as you drive.</p>
          </div>
        </div>
      </div>
      <div id="PC-only-mockup"></div>

    </div>
  </div>

  <!-- app download Ad -->
  <div class="container">
    <div class="rounded-3 app-ad">
      <div class="d-flex flex-column justify-content-center p-3 gap-2">
        <div class="d-flex justify-content-between">
          <h3 class="text-white w-75 w-md-100 display-4 fw-bold">Download our mobile App to begin
            Today!</h3>
          <img src="./img/multiple-phone-mockup.png" alt="Sabi Ride mobile App" class="">

        </div>
        <div class="d-flex gap-5 justify-content-center">
          <div class="d-flex flex-column flex-md-row justify-content-center gap-1 gap-md-5">
            <div class="order-last order-md-first align-self-center">
              <button class="btn btn-md btn-light text-nowrap" type="button"> Get App </button>
            </div>
            <div class="d-flex flex-column gap-3 align-items-center">
              <a href=""><img src="./img/App Store.png" alt="App store"></a>
              <a href=""><img src="./img/Google Play.png" alt="Google play store"></a>
            </div>
          </div>
          <div class="align-self-center">
            <img src="./img/qr-code.png" width="100px" height="100px" alt="App QR code">
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- PHP connect -->
  <?php
  // index.php
  // require_once("db/config.php");

  // Function to limit content length
  //function excerpt($text, $max_length = 100)
  // {
  //if (strlen($text) > $max_length) {
  //$text = substr($text, 0, $max_length) . '...';
  // }
  //return $text;
  //}

  //$query = 'SELECT id, title, content, image_url, created_at FROM blog_posts ORDER BY created_at DESC LIMIT 3';
  //$stmt = $pdo->query($query);

  // Debugging: Check for query execution errors
  //if (!$stmt) {
  //$errorInfo = $pdo->errorInfo();
  //echo "SQL Error: " . $errorInfo[2];
  //exit;
  // }

  // $latestPosts = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Debugging output
  //echo '<pre>';
  // print_r($latestPosts);
  // echo '</pre>';
  ?>


  <!-- News and update -->
  <div class="container news ms-3 mt-5">
    <!-- <header> -->
    <div class="row">
      <div class="col">
        <h1 class="fw-bolder text-black">News and Updates</h1>
      </div>
      <div class="text-end col">
        <a href=""><small class="fw-bold">View All <span class="bi bi-chevron-right"></span> </small></a>
      </div>
    </div>
  </div>
  <!-- News content -->
  <div class="container my-2">
    <div class="d-flex justify-content-between overflow-x-auto flex-row news-flow align-items-center">
      <div col flex-fill>
        <div class="card  rounded">
          <?php //foreach ($latestPosts as $post) :
          ?>
          <div class="post">
            <h2><?php //echo htmlspecialchars($post['title']);
                ?></h2>
            <?php //if (!empty($post['image_url'])) :
            ?>
            <img src="<?php //echo htmlspecialchars($post['image_url']);
                      ?>" alt="<?php //echo htmlspecialchars($post['title']);
                                ?>">
            <?php //endif;
            ?>
            <p><?php //echo nl2br(htmlspecialchars(excerpt($post['content'])));
                ?></p>
            <?php
            // Debugging line to check if 'id' is set
            //echo "ID: " . (isset($post['id']) ? htmlspecialchars($post['id']) : 'Not Set');
            ?>
            <a href="web/post.php?id=<?php //echo htmlspecialchars($post['id']);
                                      ?>">Read more</a>

            <small><?php //echo htmlspecialchars($post['created_at']);
                    ?></small>
          </div>
          <?php //endforeach;
          ?>
        </div>
      </div>
      <div class="col flex-fill">
        <div class="card  rounded">
          <img src="sabimages/Rectangle 32.png" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-text text-nowrap overflow-hidden">The guide to using the Sabi Ride Mobile App</div>
          </div>
        </div>
      </div>
      <div class="col flex-fill">
        <div class="card rounded">
          <img src="sabimages/Rectangle 33.png" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-text text-nowrap overflow-hidden">Dear <span id="sabi">sabi</span> Driver: How to explain that You <span id="sabi">sabi</span> Earn, You <span id="sabi">sabi</span> Drive</div>
          </div>
        </div>
      </div>
      <div class="col flex-fill">
        <div class="card  rounded">
          <img src="sabimages/Rectangle 34.png" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-text text-nowrap overflow-hidden">Sabi Ride Launches in Abuja, Nigeria</div>
          </div>
        </div>
      </div>
      <div class="col flex-fill">
        <div class="card  rounded">
          <img src="sabimages/Rectangle 32.png" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-text text-nowrap overflow-hidden">The guide to using the Sabi Ride Mobile App</div>
          </div>
        </div>
      </div>
      <div class="col flex-fill">
        <div class="card rounded">
          <img src="sabimages/Rectangle 33.png" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-text text-nowrap overflow-hidden">Dear <span id="sabi">sabi</span> Driver: How to explain that You <span id="sabi">sabi</span> Earn, You <span id="sabi">sabi</span> Drive</div>
          </div>
        </div>
      </div>
      <div class="col flex-fill">
        <div class="card  rounded">
          <img src="sabimages/Rectangle 34.png" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-text text-nowrap overflow-hidden">Sabi Ride Launches in Abuja, Nigeria</div>
          </div>
        </div>
      </div>
      <div class="col flex-fill">
        <div class="card  rounded">
          <img src="sabimages/Rectangle 34.png" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-text text-nowrap overflow-hidden">Sabi Ride Launches in Abuja, Nigeria</div>
          </div>
        </div>
      </div>


    </div>
  </div>

  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/6668c5229a809f19fb3c91b3/1i04k44il';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
  <!-- FOOTER -->

  <footer class="page-footer pb-4">
    <div class="container-fluid mt-5">
      <div class="d-flex flex-row  justify-content-center px-4 align-items-center">
        <div class="me-auto">
          <h5 class="fw-bold display-4">Sabi Ride</h5>
        </div>
        <div class="">
          <img src="./sabimages/Sabi ride 2.png" width="150" alt="">
        </div>
      </div>
      <div class="d-flex flex-row gap-2 flex-wrap justify-content-start justify-content-between px-5 mb-5">
        <div class="d-flex flex-column gap-1 align-items-start">
          <h6 class="fw-bold">Contact us</h6>
          <div>
            <a href="mailto:Sabi_ride@gmail.com">admin@sabi-ride.com.ng</a>
          </div>
          <div>
            <a href="tel:+2348145639201">+2348145639201</a>
          </div>
          <div class="d-flex flex-row">
            <a href="https://www.instagram.com/sabiride.ng?utm_source=qr&igsh=MWg5bXR4MnE2ODljZw=="><img src="./sabimages/instagram.png" alt="" class="px-2" width="40"></a>
            <a href="https://www.facebook.com/profile.php?id=61553823904645"><img src="./sabimages/facebook.png" alt="" class="px-2" width="40"></a>
            <a href="https://x.com/sabiride"><img src="./sabimages/twitter.png" alt="" class="px-2" width="40"></a>
          </div>
        </div>
        <div class="d-flex flex-column gap-1 align-items-start">
          <h6 class="fw-bold">Products</h6>
          <div>
            <a href="#!">Rides</a>
          </div>
          <div>
            <a href="#!">Food Delivery</a>
          </div>
          <div>
            <a href="#!">Dispatch </a>
          </div>
          <div>
            <a href="#!">Vip </a>
          </div>
        </div>
        <div class="d-flex flex-column gap-1 align-items-start">
          <h6 class="fw-bold">Partner with Sabi Ride</h6>

          <div>
            <a href="#!">sign up as driver</a>
          </div>
          <div>
            <a href="#!">Sign your car as vip</a>
          </div>
          <div>
            <a href="#!"></a>
          </div>
          <div>
            <a href="#!"></a>
          </div>

        </div>
        <div class="d-flex flex-column gap-1 align-items-start">
          <h6 class="fw-bold">Company</h6>

          <div>
            <a href="#!">About us</a>
          </div>
          <div>
            <a href="#!">News and Update</a>
          </div>
          <div>
            <a href="#!">Brand guidelines</a>
          </div>
          <div>
            <a href="#!"></a>
          </div>
        </div>
        <div class="d-flex flex-column mt-0 flex-md-row justify-content-center justify-content-between gap-1 gap-md-5">
          <button class="btn btn-sm btn-primary d-flex flex-row
          align-items-center justify-content-center text-nowrap" type="button">Get the App <i class="bi bi-chevron-right style=" font-size: 2rem;" aria-hidden="true"></i></button>
          <span class="me-md-auto"></span>
          <button class="btn btn-sm btn-dark text-nowrap d-flex flex-row justify-content-between text-white" type="button"><i class="bi bi-apple" style="font-size: 2rem;" aria-hidden=" true"></i><span class="d-flex flex-column align-items-center pe-2"><small>Download on the</small> App Store</span></button>
          <button class="btn btn-sm btn-dark text-nowrap  d-flex flex-row justify-content-between text-white" type="button"><i class="bi bi-play" style="font-size: 2rem;" aria-hidden=" true"></i><span class="d-flex flex-column align-items-center pe-2"><small>Download on the</small> Play Store</span></button>
        </div>
      </div>
      <div class="d-flex flex-column justify-items-start gap-1 mb-5 px-5">
        <div class="d-flex flex-row gap-2">
          <span class="bi bi-globe"></span> English <span class="bi bi-chevron-down"></span>
        </div>
        Copyright &COPY; 2024. All rights reserved.
      </div>
    </div>
  </footer>





  <script src="./js/loader.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
