<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sign up as a SABI diver today and take control of your work frequency, earn daily and above all, feel and at ease while driving">
  <title>Sabi Ride</title>
  <link rel="icon" type="image/x-icon" href="../sabimages/Sabiride3.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="../style/style1.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="../style/animations.css" rel="stylesheet">
  <link rel="stylesheet" href="../style/main.css">
  <link rel="stylesheet" href="../style/verification.css">
  <link rel="stylesheet" href="../style/boostrap_overrides.css  ">
</head>

<body>
  <!-- NAVBAR -->

  <div class="container-fluid">
    <div id="sec-1">
      <nav class=" navbar navbar-expand-lg mt-0 pt-0">
        <div class="container-fluid">
          <!-- Mobile NAV Toggle -->
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- brand-logo -->
          <a class="navbar-brand bg-transparent" href="../index.php"> <img src="../sabimages/Sabi ride 2.png" alt="Logo" width="150px" class="d-inline-block align-text-top text-white">
          </a>
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <img class="offcanvas-title bg-transparent" id="offcanvasNavbarLabel" src="../sabimages/Sabi ride 2.png" alt="Logo" width="150px" class="d-inline-block align-text-top text-white"></img>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-start flex-grow-1 justify-content-end ms-3">
                <li class="nav-item">
                  <a class="nav-link  " href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="web/driver.php">Drive or deliver</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">Ride</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="services.php">Services</a>
                </li>
              </ul>


            </div>
          </div>
      </nav>



      <!-- SABIDRIVER PAGE -->
      <div>

        <h2 id="tx_fm">Make money driving<br> with <span class="blue">sabi</span> ride.</h2>
        <p id="txt" class="pt-2 text-white">Sign up as a SABI diver today and take control of your work frequency, earn daily and above all, feel and at ease while driving</p>
      </div>

    </div>
  </div>
  <div class="container mt-3">
    <form action="action.php" method="post" id="form" enctype="multipart/form-data">
      <h1>Become a driver</h1>
      <label for="email">Email</label><br>
      <input type="email" id="email" name="email" placeholder="Enter Email Address" required><br><br>
      <label for="num">Phone Number</label><br>

      <div class="select">
        <select title="code" name="country-selector" class="country-selector w-25">
          <option value="NG" class="ng">+234</option>
        </select>
        <input type="tel" name="phone_number" id="p-num" placeholder="Mobile Number" required>
      </div><br>
      <label for="city" class="city">City</label><br>
      <input title="city" type="text" name="location_city" class="border w-75" id="city" placeholder="city where you drive" required><br><br>
      <label for="password" class="password">Password</label><br>
      <input type="password" id="password" name="password" placeholder="password" required><br><br>
      <div class="chk">
        <input type="checkbox" id="check" required>
        <p>
          By signing up, you agree to our <a href="about.php">Terms and Conditions</a>
          and confirm that you have read and understood the
          <a href="about.php">Privacy Policy for Drivers</a>
          applicable for your country
          of operation.
        </p>
      </div>
      <button id="btn" type="submit">Sign up as a driver</button>
      <div class="hv">
        <span>Already have an account?</span><a href="sabi_login.php"><span class="alert">Log in</span></a>
      </div>
    </form>


  </div>
  <div class="container FEATURES">
    <h3 class="fw-bold">Get Started</h3>
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 col-xs-8">
        <img src="../sabimages/Rectangle 64.png" alt="" width="70">
        <div class="pt-4">
          <h5 class="fw-bold pb-2">1. Sign up online</h5>
          <p id="p">Signing up online is quick and easy. just provide a few details and gain access.</p>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 col-xs-8">
        <img src="../sabimages/Rectangle 65.png" alt="" width="70">
        <div class="pt-4">
          <h5 class="fw-bold pb-2">2. Upload your documents </h5>
          <p id="p">Speed up the verification process by uploading your document securely. Our platform ensures a seamless experience allowing you to submit your documents hassle-free.</p>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 col-xs-8">
        <img src="../sabimages/Rectangle 66.png" alt="" width="70">
        <div class="pt-4">
          <h5 class="fw-bold pb-2">3. Get approved</h5>
          <p id="p">Start riding and making money on your own. Submit your application today and experience the ease of approval. Get started now!</p>
        </div>
      </div>
      <a href="#" style="text-decoration: none; margin-top: -5%; margin-bottom: 5%; margin-top: 5%;">Apply to drive <span class="bi bi-chevron-right"></span></a>
    </div>
  </div>

  <!-- Driver Workflow Description -->
  <div class="container-fluid">
    <div class="row g-5 justify-content-center">
      <div class="col-12">
        <h3 class="display-6 fw-bold text-center mt-0">
          Work flow as a <span id="sabi">sabi</span> Driver
        </h3>
      </div>
    </div>


    <div class="d-flex gap-5 flex-row justify-content-center mt-4 align-items-center">

      <div class="ms-3">
        <div class="d-flex gap-4">
          <div class="numpill bg-info">1</div>
          <div class="d-flex flex-column">
            <!-- TODO:: REPEATING ID SELECTOR, refactor sabi to CSS class -->
            <h3 class="fw-bold">Accept <span id="sabi">sabi</span> Rider request</h3>
            <p class="">
              <!-- short Description here! -->
              <!-- if description remove chevron -->
            </p>
          </div>
        </div>

        <div class="bi bi-arrow-down-circle-fill text-info text-center p-1" style="font-size: 1rem;"></div>

        <div class="d-flex gap-4">
          <div class="numpill bg-warning">2</div>
          <div class="d-flex flex-column">
            <h3 class="fw-bold">Drive to Pickup passanger.</h3>
            <p class="">
              <!-- short Description here! -->
            </p>
          </div>
        </div>

        <div class="bi bi-arrow-down-circle-fill text-warning text-center p-1" style="font-size: 1rem;"></div>

        <div class="d-flex gap-4">
          <div class="numpill bg-success">3</div>
          <div class="">
            <h3 class="fw-bold">Arrive at your destination</h3>
            <!-- short Description here! -->
            <p class=""></p>
          </div>
        </div>
      </div>
      <div class="bi bi-cash-coin text-success text-center" style="font-size: 5rem;">
      </div>

    </div>
  </div>
  <!-- mobile app Ad -->
  <?php require_once("../include/app_ad.php"); ?>


  <div class=" container PAGE mb-5">
    <div class="d-flex flex-row justify-content-between gap-2 pt-5">
      <div id="hpb" class=" ps-2">
        <h4 class="display-4 fw-bold">Be your own boss.</h4>
        <h4 class="display-4 fw-bold">As you sabi drive,</h4>
        <h4 class="display-4 fw-bold">You go sabi earn!</h4>

        <button class="btn btn-sm btn-light text-center ms-5 mb-5" type="button" style="width:150px; height:60px;">Apply online <span class="bi bi-chevron-right" style="font-size: 1rem;"></span></button>
      </div>
      <div class="mt-2">
        <img src="../img/pato_driver.png" alt="driver picture" class="align-self-bottom">
        <!-- <img src="../sabimages/sabiImage_rec_58.jpg" alt="" alt="..."> -->
      </div>
    </div>
  </div>

  </div>
  <div class="">
    <h2 class="text-center fw-bold">Frequently Asked Questions </h2>
    <div>
      <section class="sec2">
        <div class="question">
          <p>Can i drive Sabi Ride in my state? <i class='bx bx-chevron-down'></i></p>
        </div>
        <div class="question">
          <p>Can i drive Sabi Ride in my state? <i class='bx bx-chevron-down'></i></p>
        </div>
        <div class="question">
          <p>Can i drive Sabi Ride in my state? <i class='bx bx-chevron-down'></i></p>
        </div>
        <div class="question">
          <p>Can i drive Sabi Ride in my state? <i class='bx bx-chevron-down'></i></p>
        </div>
      </section>
      </h2>
    </div>


  </div>
  <!-- FOOTER -->

  <?php require_once("../include/footer.php"); ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
