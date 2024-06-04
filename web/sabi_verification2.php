<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabi Driver</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../style/sabi_verification1.css">
</head>
<body>
    <main>
        <div class="col-sm-12 col-md-4 col-lg-12 bbox text-center">
            <span>Sabi <span>Driver</span></span>
        </div>
        <hr class="first-hr">
        <div class="progress">
            <span class="bar" id="bar1"></span>
            <span class="num" id="num">1</span>
            <span class="bar"></span>
            <span class="num" style="background-color: #617A97">2</span>
            <span class="bar"></span>
            <span class="num" style="background-color: #617A97">3</span>
            <span class="bar"></span>
            <span class="num">4</span>
            <span class="bar" id="last-bar"></span>
        </div>
        <p>Private and licenseing details</p>
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-3 col-xl-3 mb-3">
            <form action="" method="post" enctype="multipart/form-data">
            <label for="exampleFormControlInput1" class="form-label">Driver's License number</label>
            <input type="text" name="driver_license_number" class="form-control" id="">
            <p id="p">Enter Driver's License number</p>
            <div>
            <label  class="form-label" for="driver_license_expiry">Driver License Expiry:</label>
            <input type="date" id="driver_license_expiry" class="form-control" name="driver_license_expiry">
            </div>
          </div>
            <button type="button" id="button2" class="col-xs-10 col-sm-10 col-md-7 col-lg-3 col-xl-3"><span>Continue</span><i class='bx bx-right-arrow-alt'></i></button>
</form>
        </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>