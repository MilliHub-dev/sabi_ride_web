<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sabi Ride</title>
  <link rel="icon" type="image/x-icon" href="./sabimages/Sabiride3.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./style/loader.css">
  <!-- <link rel="stylesheet" href="./style/style1.css"> -->
  <link rel="stylesheet" href="./css/fonts.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./style/main.css">
  <link rel="stylesheet" href="./style/verification.css">

</head>

<!-- loader -->
<!-- <div id="loader">
    <div class="loader-content">
      <img src="./sabimages/Sabiride3.png" alt="Loading..." class="spinning-image">

    </div>
  </div> -->

<body>
  <!-- NAVBAR -->
  <nav class=" navbar sticky-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" i href="index.php"> <img src="./sabimages/Sabi ride 2.png" width="100px" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="web/driver.php">Drive or deliver</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ride</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="web/blog2.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="web/about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="web/services.php">Services</a>
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
              <a class="nav-link active" aria-current="page" href="web/sabi_login.php">Login</a>
            </li>

          </ul>
          <button style="background-color: #0088CD; outline: none; border: 0; border-radius: 20px; height: 30px; padding: 0 10px; margin-top: 5px;"><a href="web/driver.php" style="text-decoration: none; color: #fff;">Sign up</a></button>







        </div>
      </div>
    </div>
  </nav>


  <!-- Page Hero -->
  <div class="parallax bgimg-1 pt-5">
    <div class="container-fluid">
      <div class="row g-0 justify-content-between min-vh-100">
        <div class="col-12">
          <div class="brandcaption">
            <span class="text-start text-white text-wrap">Anywhere you dey go,<br>we <span class="bluey">sabi</span> am.</span>
          </div>
        </div>
        <div class="col-12 mt-5">
          <div class="caption0">
            <div class="text-start fw-normal text-white mb-3 lead"> Sabi Ride is a social ride hailing/sharing platform revolved around providing convenience, safety, and efficiency for both riders and drivers. Sabi ride is driven by safety, fueled by convenience.
            </div>
          </div>

        </div>
        <div class=" col-12">
          <div class=" caption1 " id="btn">
            <button class="btn btn-link " type="button" style="height: 60px; margin-bottom: 10px;">Take a ride With Sabi Ride</button>
            <button class="btn btn-link" type="button" style="height: 60px; margin-bottom: 10px;">Drive with Sabi Ride</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Service Heading -->
  <div class="container-fluid row mt-4">
    <div class="row justify-content-center">
      <div class="col-12">
        <h3 class="text-start display-3 fw-bold" style="padding-left:7%;  text-align: justify;">Our services</h3>
      </div>
    </div>
  </div>

  <!-- Serivce cards -->
  <div class="parallax bgimg-3 mb-2 pt-5 mt-0 shadow-m">
    <div class="pt-2">
      <div class="container-fluid">
        <div class="row g-3 align-items-center justify-content-center">
          <div class=" col-md-6 col-lg-4 col-xl-3 col-xxl-4">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Rides</h5>
                <p class="card-text float-start"> Transportation service that allows passengers
                  to request a ride from a location using a mobile app.</p>
                <img src="./sabimages/Rectangle 17.png" class="float-end pb-0" alt="">
              </div>
            </div>
          </div>
          <div class=" col-md-6 col-xl-3 col-lg-4 col-xxl-4">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">VIP Rides</h5>
                <p class="card-text float-start"> This service is designed to provide a higher level of comfort, luxury,
                  and personalized experience to users.</p>
                <img src="./sabimages/Rectangle 31.png" class="float-end pb-0" alt="">
              </div>
            </div>
          </div>
          <div class=" col-md-6 col-lg-4 col-xl-3 col-xxl-4">
            <div class="card h-100">
              <div class="card-body ">
                <h5 class="card-title">Food Delivery</h5>
                <p class="card-text float-start">This is a service of bringing prepared meals directly to a customer's specified location.</p>
                <img src="./sabimages/Rectangle 18.png" class="float-end pb-0" alt="">
              </div>
            </div>
          </div>
          <div class=" col-md-6 col-lg-4 col-xl-3 col-xxl-4">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Groceries</h5>
                <p class="card-text float-start">This is a service of bringing
                  groceries directly to a customer's
                  specified location.</p>
                <img src="./sabimages/Rectangle 19.png" class="float-end pb-0" alt="">
              </div>
            </div>
          </div>
          <div class=" col-md-6 col-xl-3 col-lg-4 col-xxl-4">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Logistics</h5>
                <p class="card-text float-start">This is a service of delivering
                  items directly to a customer's
                  specified location.</p>
                <img src="./sabimages/Rectangle 28.png" class="float-end pb-0" alt="">
              </div>
            </div>
          </div>
          <div class=" col-md-6 col-xl-3 col-lg-4 col-xxl-4">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Dispatch</h5>
                <p class="card-text float-start">This is a service of assigning and
                  coordinating the pickup and delivery of small goods. </p>
                <img src="./sabimages/dispatch.png" width="120" class="float-end pb-0" alt="">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Info icons -->
  <section class="rel container-fluid mt-4 mb-4">
    <div class="row g-2 justify-content-center align-items-center">
      <div class="col-md-6 text-center col-xl-3 col-xxl-4 col-sm-6 ">
        <article class="counter-modern border w-50  d-block center-block-elem text-center btn ">
          <span class="counter-modern-main icon counter-modern-icon mdi mdi-flag-variant badge rounded-pill bg-info ">
            24K
          </span>
          <p class="pt-0 mb-0 counter-modern-title">Customers</p>

        </article>
      </div>
      <div class="col-md-6 text-center col-xl-3 col-xxl-4 col-sm-6  justify-content-center align-items-center">
        <article class="border  w-50  d-block center-block-elem text-center btn ">
          <span class="icon mdi mdi-car badge rounded-pill bg-info">250
          </span>
          <p class="pt-1 mb-0">Total Rides</p>
        </article>
      </div>

      <div class="col-md-6 text-center  col-xl-3 col-xxl-4 col-sm-6 ">
        <article class="counter-modern border w-50  d-block center-block-elem text-center btn ">
          <span class="counter-modern-main icon counter-modern-icon mdi mdi-coin  badge rounded-pill bg-info">
            231k
          </span>
          <p class="pt-0 mb-0">Active Ride</p>
        </article>
      </div>
      <div class="col-md-6 text-center  col-xl-3 col-xxl-4 col-sm-6 ">
        <article class="border w-50  d-block center-block-elem text-center btn ">
          <span class="icon mdi mdi-account badge rounded-pill bg-info">17</span>
          <p class="pt-0 mb-0">Drivers</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Hero2 -->
  <div class="parallax bgimg-4">
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
                <span class="numpill btn" style="font-size: 1.5rem; padding-top: 1px;">1</span>
                <div class="d-grid">
                  <h3 class="text-white text-start pt-1">Drive more, Earn More.</h3>
                  <p class="text-white text-start">Make more money when you when you ride more</p>
                </div>
              </div>

              <div class="my-3">
                <div class="d-flex gap-3">
                  <span class="numpill btn" style="font-size: 1.5rem; padding-top: 1px;">2</span>
                  <div class="d-grid">
                    <h3 class="text-white pt-1 text-start">Drive according to your schedule.</h3>
                    <p class="text-white text-start">Pick up passengers as schedule</p>
                  </div>
                </div>
              </div>
              <div class="my-3">
                <div class="d-flex gap-3">
                  <span class=" numpill btn" style="font-size: 1.5rem; padding-top: 1px;">3</span>
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
                <img id="phonemockup" src="./sabimages/555.png" height="70px" alt="" class="img-fluid img-5 mb-5">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- Our Advantage -->
  <section class="section section-lg text-center bg-gray-950 mt-4">
    <div class="container-fluid">
      <div class="row align-items-center g-3 gray_border pb-5 h-100">
        <div class="col-12 justify-contents-center">
          <h2 class="wow fadeIn text-dark-50 display-2">Our Advantage</h2>
        </div>
        <div class="col-sm-6 col-lg-6 col-xl-3 wow fadeIn">
          <div class="btn">
            <!-- Box Classic-->
            <article class="box-classic "><span class="icon box-classic-icon fl-bigmug-line-map87 text-decoration-none"></span><span class="box-classic-main">
                <h4 class="box-classic-title">Ride Sharing</h4>
                <p>Ride sharing offers cost savings, convenience through sabi ride mobile apps,<br> flexible ride options, and enhanced safety with background checks and driver ratings.</p>
              </span></article>
          </div>
        </div>
        <div class="col-sm-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay=".4s">
          <div class="btn">
            <!-- Box Classic-->
            <article class="box-classic"><span class="icon box-classic-icon fl-bigmug-line-portfolio23"></span><span class="box-classic-main">
                <h4 class="box-classic-title">Price Transparency</h4>
                <p>Price transparency in Sabi Ride ensures clear, <br> upfront fare information, preventing hidden costs, fostering trust, and allowing users to make informed decisions.</p>
              </span></article>
          </div>
        </div>
        <div class="col-sm-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay=".3s">
          <div class="btn">
            <!-- Box Classic-->
            <article class="box-classic"><span class="icon box-classic-icon fl-bigmug-line-planetary2"></span><span class="box-classic-main">
                <h4 class="box-classic-title">Social Feature</h4>
                <p>Enhancing user experience by enabling friend connections and social interactions, fostering a sense of community and safety, while also providing opportunities for sharing ride costs.</p>
              </span></article>
          </div>
        </div>

        <div class="col-sm-6 col-lg-6 col-xl-3 h-100 wow fadeIn" data-wow-delay=".5s">
          <div class="btn pb-5">
            <!-- Box Classic-->
            <article class="box-classic"><span class="icon box-classic-icon fl-bigmug-line-headphones32"></span><span class="box-classic-main">
                <h4 class="box-classic-title">24/7 Online Support</h4>
                <p>Support ensures continuous assistance, immediate issue resolution, enhanced user satisfaction, and trust by providing round-the-clock availability for queries and troubleshooting.</p>
              </span></article>
          </div>
        </div>


      </div>
    </div>
    </div>
    </div>
  </section>

  <!-- News and update -->
  <div class="container CTAFOUR my-3">
    <div class="row News border">
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
          <div class="card m-3">
            <?php //foreach ($latestPosts as $post) : ?>
              <div class="post">
                <h2><?php //echo htmlspecialchars($post['title']); ?></h2>
                <?php //if (!empty($post['image_url'])) : ?>
                  <img src="<?php //echo htmlspecialchars($post['image_url']); ?>" alt="<?php //echo htmlspecialchars($post['title']); ?>">
                <?php //endif; ?>
                <p><?php //echo nl2br(htmlspecialchars(excerpt($post['content']))); ?></p>
                <?php
                // Debugging line to check if 'id' is set
                //echo "ID: " . (isset($post['id']) ? htmlspecialchars($post['id']) : 'Not Set');
                ?>
                <a href="web/post.php?id=<?php //echo htmlspecialchars($post['id']); ?>">Read more</a>

                <small><?php //echo htmlspecialchars($post['created_at']); ?></small>
              </div>
            <?php //endforeach; ?>
          </div>
          <div class="card m-3">
            <img src="sabimages/Rectangle 32.png" class="card-img-top" alt="...">
            <div class="card-body">
              <b class="card-text">The 2020 Guide For White Men in Tech</b>
            </div>
          </div>
          <div class="card m-3">
            <img src="sabimages/Rectangle 33.png" class="card-img-top" alt="...">
            <div class="card-body">
              <b class="card-text">Dear Designer: How to Explain to Your Kids That You Work at Facebook</b>
            </div>
          </div>
          <div class="card m-3">
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
          <div class="card mb-3 p-3" style="max-width: 540px;">
            <div class="row g-0">
              <center><img src="./sabimages/113.png" alt="" class="mx-auto d-flex" width="30%"></center><br>
              <div class="col-md-4">
                <img src="./sabimages/Rectangle 38.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <img src="./sabimages/store-apple-logo-apple.png" width="100px" alt="">
                  <p class="card-text">Scan to download</p>
                  <button class="btn btn-primary" type="button">Download Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 mx-auto d-block">
          <div class="card mb-3 p-3" style="max-width: 540px;">
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
      <a href="/"><img src="./sabimages/instagram.png" alt="" class="px-2" width="40"></a>
      <a href="/"><img src="./sabimages/facebook.png" alt="" class="px-2" width="40"></a>
      <a href="/"><img src="./sabimages/twitter.png" alt="" class="px-2" width="40"></a>
    </div>
  </footer>
  </div>

  <!-- </div> -->


  <script src="./js/loader.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>
