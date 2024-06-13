 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            <span class="num">2</span>
            <span class="bar"></span>
            <span class="num">3</span>
            <span class="bar"></span>
            <span class="num">4</span>
            <span class="bar" id="last-bar"></span>
        </div>
    </main>
    <div class="container-fluid">
        <div class="row">
          <P>Personal Information and vehicle details</P>
            <div class="col-2"></div>
            <div class="col-xs-6 col-sm-8 col-md-7 col-lg-8 col-xl-8">

            <form action="sabi_verification2.php" method="POST" enctype="multipart/form-data" >
                <div class="mb-3">
                  <input type="text" name="first_name" id="f-name" class="form-control" placeholder="First name" required>
                </div>
                <div class="mb-3">
                  <input type="text" id="" name="middle_name" class="form-control" placeholder="Middle name" required>
                </div>
                <div class="mb-3">
                  <input type="text" id="" name="last_name" class="form-control" placeholder="Last name" required >
                </div>
                <div class="mb-3">
                  <select id="gender" name="gender" class="form-select" required>
                    <option selected disabled>Choose a gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="mb-3">
                  <input type="text" id="disabledTextInput" class="form-control" name="referral_code" placeholder="Referral code" required>
                  <label style="font-size: 18px; color: #6D7D8B; font-weight: 500;">If someone refered you, enter their code</label>
                </div>
                <div class="mb-3">
                  <select id="driver_type" name="driver_type" class="form-select" required>
                    <option selected disabled>Driver type</option>
                    <option value="Car_driver">Car Driver</option>
                    <option value="Dispatch">Dispatch</option>
                  </select>
                </div>
                <div class="mb-3">
                  <select id="v-manufacturer" name="vehicle_manufacturer" class="form-select" required>
                    <option selected disabled>Choose your vehicle manufacturer</option>
                    <option value="toyota">Toyota</option>
                    <option value="ford">Ford</option>
                    <option value="chevrolet">Chevrolet</option>
                    <option value="honda">Honda</option>
                    <option value="nissan">Nissan</option>
                    <option value="bmw">BMW</option>
                    <option value="mercedes-benz">Mercedes-Benz</option>
                    <option value="audi">Audi</option>
                    <option value="volkswagen">Volkswagen</option>
                    <option value="hyundai">Hyundai</option>
                    <option value="kia">Kia</option>
                    <option value="subaru">Subaru</option>
                    <option value="mazda">Mazda</option>
                    <option value="lexus">Lexus</option>
                    <option value="acura">Acura</option>
                    <option value="infiniti">Infiniti</option>
                    <option value="volvo">Volvo</option>
                    <option value="tesla">Tesla</option>
                    <option value="mitsubishi">Mitsubishi</option>
                    <option value="cadillac">Cadillac</option>
                    <option value="chrysler">Chrysler</option>
                    <option value="gmc">GMC</option>
                    <option value="lincoln">Lincoln</option>
                    <option value="alfa-romeo">Alfa Romeo</option>
                  </select>
                </div>

                <div class="mb-3">
                <input type="text" id="" name="vehicle_model" class="form-control" placeholder="Enter your vehicle model" required>
                </div>

                <div class="mb-3">
                  <input type="number" id="" name="vehicle_year" class="form-control" placeholder="Enter your vehicle year" required>
                </div>

                <div class="mb-3">
                  <input type="text" id="" name="license_plate" class="form-control" placeholder="License plate" required>
                </div>

                <div class="mb-3">
                  <select id="vehicle-color" name="vehicle_color" class="form-select" required>
                    <option selected disabled>Choose your vehicle color</option>
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="green">Green</option>
                    <option value="black">Black</option>
                    <option value="white">White</option>
                    <option value="silver">Silver</option>
                    <option value="gray">Gray</option>
                    <option value="yellow">Yellow</option>
                    <option value="orange">Orange</option>
                    <option value="brown">Brown</option>
                     <option value="purple">Purple</option>
                  </select>
                </div>
                <div class="col-2">
              <div>
                    <button type="submit" id="btn"><span>Next</span><i class='bx bx-right-arrow-alt'></i></button>
                </div>
              </div>
              </form>
              
            </div>
        </div>
    </div>
    <div class="col-10 bg-white">
     
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>