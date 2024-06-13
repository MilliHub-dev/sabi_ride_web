<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sabi Ride</title>
    <link rel="icon" type="image/x-icon" href="../sabimages/Sabi ride 3.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="../style/animations.css" rel="stylesheet">
  </head>
  <body>
    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
<<<<<<< HEAD
    <a class="navbar-brand" i href="./index.php"> <img src="../sabimages/Sabi ride 2.png" width="100px" alt=""></a>
=======
    <a class="navbar-brand" i href="./index.php"> <img id="nav-logo" src="../sabimages/Sabi ride 2.png" width="150px" alt=""></a>
>>>>>>> 46153e622ebade4aac34728a59db770c6a7762d7
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="nav">

      <div class="d-flex me-4 mb-1">
        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-globe me-1" style="font-size: 1.3rem; color: rgb(0, 0, 0);"></i>EN</a>
      </div>
      <div class="d-flex">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="signup.html">Help</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Login</a>
          </li>

        </ul>
       <button style="background-color: #0088CD; outline: none; border: 0; border-radius: 20px; height: 30px; padding: 0 10px; margin-top: 5px;"><a href="" style="text-decoration: none; color: #fff;">Sign up</a></button>
      </div>
    </div>
  </div>
</nav>


<!-- SABIDRIVER PAGE -->

      <div id="sec-1">
        <h2 id="tx_fm">Make money driving<br>  with <span class="blue">sabi</span> ride.</h2>
        <p id="txt" class="pt-2 text-white">Join our innovative ride-hailing platform and start earning today. <br> With flexible schedules, competitive rates, and a supportive community, driving with us is not just a job, it's a rewarding experience. <br> Sign up now and turn your wheels into wealth!</p>
        </div>
        <div>
            <form action="action.php" method="post" id="form" enctype="multipart/form-data" >
                <h1>Become a driver</h1>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" placeholder="Enter Email Address"><br><br>
                <label for="num">Phone Number</label><br>

                <div class="select">
                    <select title="code" name="country-selector" class="country-selector">
                      <option value="NG" class="ng">+234</option>
                    </select>
                    <input type="tel" name="phone_number" id="p-num" placeholder="Mobile Number">
                </div><br><br>
                <label for="city" class="city">City</label><br>
                <select title="city" name="location_city" class="cities">
                    <option value="0">City where you drive</option>
                    <option value="UYO">UYO</option>

                </select><br><br>
                <label for="password" class="password">Password</label><br>
                <input type="password" id="password" name="password" placeholder="password"><br><br>
                <div class="chk">
                    <input type="checkbox" id="check">
                    <p>
                        By signing up, you agree to our <a href="">Terms and Conditions</a>
                        and confirm that you have read and understood the
                        <a href="">Privacy Policy for Drivers</a>
                        applicable for your country
                        of operation.
                    </p>
                </div>
                <button id="btn" type="submit">Sign up as a driver</button>
                <div class="hv">
                    <span>Already have an account?</span><a href="sabi_login.php">Log in</a>
                </div>
            </form>

        </div>
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
                <p id="p">Speed up the verification process by uploading your document securely. our platform ensures a seamless experience allowing  you to submit your documents hassle-free.</p>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 col-xs-8">
            <img src="../sabimages/Rectangle 66.png" alt="" width="70">
            <div class="pt-4">
                <h5 class="fw-bold pb-2">3. Get approved</h5>
                <p id="p">start riding and making money on your own. submit your application today and experience the ease of approval. Get started now!.</p>
            </div>
        </div>
        <a href="#" style="text-decoration: none; margin-top: -5%; margin-bottom: 5%; margin-top: 5%;">Apply to drive</a>
    </div>
</div>
<div class=" container PAGE">
        <div id="last">
          <div id="hpb">
            <h2 class="border">Be your own boss. As you sabi drive, you go sabi earn.</h2>
            <p>Join our unique ride-hailing platform and take control of your earnings. <br> With flexible hours and competitive rates, driving with us means maximizing your income while enjoying the freedom of being your own boss. <br> Sign up now and start earning!</p>
            <button type="button" style="text-decoration: none;">Apply online <span>></span></i></button>
          </div>
          <div>
            <img src="../sabimages/sabiImage_rec_58.jpg" alt=""  alt="...">
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



<!-- FOOTER -->

<<<<<<< HEAD
<?php require_once("../include/footer.php"); ?>
  
=======
<footer>
  <div id="ft">
    <img src="../sabimages/Sabi ride 2.png"  style="height: 100px;">
    <div id="pages">
      <ul>
          <h2>Sabi Ride</h2>
          <li><a href="#">Rides</a></li>
          <li><a href="#">Food Delivery</a></li>
          <li><a href="#">Grocery Delivery</a></li>
          <li><a href="#">Lorem ipsum</a></li>
      </ul>

      <ul class="back">
          <h2>Partner with Sabi Ride</h2>
          <li><a href="#">Sign up as a driver</a></li>
          <li><a href="#">Sign up as a courier</a></li>
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
      </ul>

      <ul>
          <h2>Company</h2>
          <li><a href="#">About Us</a></li>
          <li><a href="#">News and updates</a></li>
          <li><a href="#">Brand guidelines</a></li>
          <li><a href="#">Lorem ipsum</a></li>
      </ul>
    </div>
  </div>

  <div class="socials" style="margin-bottom: 8%;">
    <a href="/"><img src="../sabimages/instagram.png" alt="" class="px-2" width="60"></a>
    <a href="/"><img src="../sabimages/facebook.png" alt="" class="px-2" width="60"></a>
    <a href="/"><img src="../sabimages/twitter.png" alt="" class="px-2" width="60"></a>
  </div>
</footer>

>>>>>>> 46153e622ebade4aac34728a59db770c6a7762d7
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>
