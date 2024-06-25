<!doctype html>
<html lang="en" data-bs-theme="dark">

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
        <a class="navbar-brand me-5" href="index.php"> <img src="./sabimages/Sabi ride 2.png" alt="Logo" width="150px" class="d-inline-block align-text-top text-white">
        </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <img class="offcanvas-title" id="offcanvasNavbarLabel" src="./sabimages/Sabi ride 2.png" alt="Logo" width="150px" class="d-inline-block align-text-top text-white"></img>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-start flex-grow-1 justify-content-end pe-3">
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
            <span class="text-start text-white">Anywhere you dey go,<br>we <span class="bluey">sabi</span> am.</span>
          </div>
        </div>
        <div class="col-10 justify-content-start mt-5">
          <div class="lead-caption">
            <div class="text-start text-white text-wrap text-justify"> Sabi Ride is a social ride hailing/sharing platform revolved around providing convenience, safety, and efficiency for both riders and drivers. Sabi ride is driven by safety, fueled by convenience.
            </div>
          </div>
        </div>
        <div class="d-flex  mb-5 gap-3 py-3 flex-row flex-wrap">
          <button class="btn btn-sm btn-light d-flex flex-row align-items-center justify-content-center justify-content-between text-nowrap" type="button">Become a Driver <i class="bi bi-chevron-right style=" font-size: 2rem;" aria-hidden="true"></i></button>
          <span class="me-md-auto"></span>
          <button class="btn btn-sm btn-dark text-nowrap d-flex flex-row justify-content-between text-white" type="button"><i class="bi bi-apple" style="font-size: 2rem;" aria-hidden=" true"></i><span class="d-flex flex-column pe-2"><small>Download on the</small> App Store</span></button>
          <button class="btn btn-sm btn-dark text-nowrap  d-flex flex-row justify-content-between text-white" type="button"><i class="bi bi-play" style="font-size: 2rem;" aria-hidden=" true"></i><span class="d-flex flex-column justify-content-between pe-2"><small>Download on the</small> Play Store</span></button>
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
  <section class="rel container-fluid mt-4 mb-4">
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
  </section>

  <!-- Hero2 -->
  <div class="parallax bgimg-4 mb-5">
    <div class="pt-5">
      <div class="container-fluid">
        <div class="row g-5 gx-5">
          <div class="col-12">
            <!-- caption2 -->
            <div class="caption2 d-block text-center">
              <h3 class="display-6 fw-bold text-white text-center mt-0">
                Earn Money With Sabi Ride
              </h3>
              <div class="col-12 text-center">
                <button class="btn btn-link m-auto border" type="button">Driver</button>
                <button class="btn btn-link m-auto border" type="button">Dispatch Rider</button>
              </div>
            </div>
          </div>
        </div>
        <!-- caption3 -->
        <div class="caption3 d-block text-center">
          <div class="row pt-1 g-3 mt-1">
            <div class="col-6">
              <h3 class="display-6 text-start text-white fw-bold mb-3">Drive and Earn Money</h3>
              <div class="d-flex gap-3">
                <div class="numpill">1</div>
                <div class="d-grid">
                  <h3 class="text-white text-start pt-1">Drive more, Earn More.</h3>
                  <p class="text-white text-start">Make more money when you when you ride more</p>
                </div>
              </div>

              <div class="my-3">
                <div class="d-flex gap-3">
                  <div class="numpill">2</div>
                  <div class="d-grid">
                    <h3 class="text-white pt-1 text-start">Drive according to your schedule.</h3>
                    <p class="text-white text-start">Pick up passengers as schedule</p>
                  </div>
                </div>
              </div>
              <div class="my-3">
                <div class="d-flex gap-3">
                  <div class="numpill">3</div>
                  <div class="d-grid">
                    <h3 class="text-white pt-1 text-start">Get paid each day.</h3>
                    <p class="text-white text-start">Get paid anytime anyday</p>
                  </div>
                </div>
              </div>
              <a href="#" class="Learn text-decoration-none btn-link btn mb-5">Learn More</a>
            </div>
            <div class="col-6 ">
              <div class="d-flex">
                <img src="./sabimages/555.png" height="70px" alt="" class="img-fluid img-5 mb-5">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- TODO::TO BE STYLED LATER -->
  <!-- Our Advantage -->
  <!-- <div class="container-fluid clearfix">
    <div class="row g-2 d-flex flex-row flex-wrap overflow-x-scroll">
      <div class="col-12">
        <h2 class="text-dark-50 display-2 text-center">Our Advantage</h2>
      </div>
      <div class="col-6 p-2 flex-fill">
        <div class="card d-flex flex- align-items-center justify-content-center">
          <img src="" class="card-img-top fa fa-arrow-left">
          <h4 class="card-title">Social Feature</h4>
          <p class="card-text p-3">Enhancing user experience by enabling friend connections and social interactions, fostering a sense of community and safety, while also providing opportunities for sharing ride costs.</p>
        </div>
      </div>
      <div class="col-6 p-2 flex-fill">
        <div class="card d-flex flex-row align-items-center justify-content-center">
          <span class="icon box-classic-icon fl-bigmug-line-map87 text-decoration-none"></span>
          <h4 class="card-title">Ride Sharing</h4>
          <p class="card-text">Ride sharing offers cost savings, convenience through sabi ride mobile apps, flexible ride options, and enhanced safety with background checks and driver ratings.</p>
        </div>
      </div>
      <div class="col-6 p-2 flex-fill">
        <div class="card d-flex flex-row align-items-center justify-content-center">
          <h4 class="card-title">Price Transparency</h4>
          <p class="card-text">Price transparency in Sabi Ride ensures clear, upfront fare information, preventing hidden costs, fostering trust, and allowing users to make informed decisions.</p>
        </div>
      </div>
      <div class="col-6 p-2 flex-fill">
        <div class="card d-flex flex-row align-items-center justify-content-center">
          <h4 class="card-title">24/7 Online Support</h4>
          <p class="card-text">Support ensures continuous assistance, immediate issue resolution, enhanced user satisfaction, and trust by providing round-the-clock availability for queries and troubleshooting.</p>
        </div>
      </div> -->

  <!-- News and update -->
  <div class="container CTAFOUR my-3 news">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <h1 class="fw-bolder text-black">News and Updates</h1>
      </div>
      <div class="text-end col-6">
        <h3 class="pt-2 fw-bold">View All &nbsp; <i class="bi bi-globe"></i></h3>
      </div>
    </div>
    <div class="container">
      <div class="row mt-2 p-4">
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
        <style>
          .custom-image {
            height: 200px;
            object-fit: cover;
          }
        </style>

        </style>

        <div class="card-group">
          <div class="card m-3 rounded">
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
          <div class="card m-3 rounded">
            <img src="sabimages/Rectangle 32.png" class="card-img-top" alt="...">
            <div class="card-body">
              <b class="card-text">The 2020 Guide For White Men in Tech</b>
            </div>
          </div>
          <div class="card m-3 rounded">
            <img src="sabimages/Rectangle 33.png" class="card-img-top" alt="...">
            <div class="card-body">
              <b class="card-text">Dear Designer: How to Explain to Your Kids That You Work at Facebook</b>
            </div>
          </div>
          <div class="card m-3 rounded">
            <img src="sabimages/Rectangle 34.png" class="card-img-top" alt="...">
            <div class="card-body">
              <b class="card-text">Data-Driven Design is Killing Our Instinct</b>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>



  <div class="container-fluid CTAFIVE my-3" style="background-color: rgb(207, 242, 247);">
    <div class="container scan">
      <center>
        <h2 class="py-5">Download our apps</h2>
      </center>

      <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 g-4">
        <center>
          <h1 class="py-5">Download our mobile app to make your Ride experience better than ever before!</h1>
        </center>
        <div class="col-6 mx-auto d-block">
          <div class="card mb-3 p-3 rounded" style="max-width: 540px;">
            <div class="row g-0">
              <center><img src="./sabimages/113.png" alt="" class="mx-auto d-flex" width="30%"></center><br>
              <div class="col-md-4">
                <img src="./sabimages/Rectangle 38.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body ">
                  <img src="./sabimages/store-apple-logo-apple.png" width="100px" alt="">
                  <p class="card-text">Scan to download</p>
                  <button class="btn btn-primary" type="button">Download Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 mx-auto d-block">
          <div class="card mb-3 p-3 rounded" style="max-width: 540px;">
            <div class="row g-0">
              <center><img src="./sabimages/113.png" alt="" class="mx-auto d-flex" width="30%"></center><br>
              <div class="col-md-4">
                <img src="./sabimages/Rectangle 38.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <img src="./sabimages/google-play-store-logo.png" width="100px" alt="">
                  <p class="card-text">Scan to download</p>
                  <button class="btn btn-primary" type="button">Download Now</button>
                </div>
              </div>
            </div>
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


  <footer class="page-footer font-small blue py-4 my-3">
    <div class="container text-center text-md-left">

      <div class="row">
        <div class="col-md-3 mt-md-0 mt-3">
          <img src="./sabimages/Sabi ride 2.png" width="150" alt="">
        </div>
        <hr class="clearfix w-50 m-auto d-md-none pb-3">
        <div class=" col-md-3 mb-md-0 mb-3">
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
              <a href="#!">Sign your car as vip</a>
            </li>
            <li>
              <a href="#!"></a>
            </li>
            <li>
              <a href="#!"></a>
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
              <a href="#!"></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2024 Copyright: Powered By MILLIHUB
      <a href="https://www.instagram.com/sabiride.ng?utm_source=qr&igsh=MWg5bXR4MnE2ODljZw=="><img src="./sabimages/instagram.png" alt="" class="px-2" width="40"></a>
      <a href="https://www.facebook.com/profile.php?id=61553823904645"><img src="./sabimages/facebook.png" alt="" class="px-2" width="40"></a>
      <a href="https://x.com/sabiride"><img src="./sabimages/twitter.png" alt="" class="px-2" width="40"></a>
    </div>
  </footer>
  </div>
  </div>

  <!-- </div> -->


  <script src="./js/loader.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
