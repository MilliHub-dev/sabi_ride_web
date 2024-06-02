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
            <form>
                <div class="mb-3">
                  <input type="text" id="f-name" class="form-control" placeholder="First name">
                </div>
                <div class="mb-3">
                  <input type="text" id="" class="form-control" placeholder="Middle name">
                </div>
                <div class="mb-3">
                  <input type="text" id="" class="form-control" placeholder="Last name">
                </div>
                <div class="mb-3">
                  <label for="gender" class="form-label">Gender</label>
                  <select id="gender" class="form-select">
                    <option selected disabled>Choose a gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>
                </div>
                <div class="mb-3">
                  <input type="text" id="disabledTextInput" class="form-control" placeholder="Referal code">
                  <label style="font-size: 18px; color: #6D7D8B; font-weight: 500;">If someone refered you, enter their code</label>
                </div>
                <div class="mb-3">
                  <select id="driver-type" class="form-select">
                    <option selected disabled>Driver type</option>
                    <option value="1"></option>
                    <option value="2"></option>
                  </select>
                </div>
                <div class="mb-3">
                  <select id="v-manufacturer" class="form-select">
                    <option selected disabled>Choose your vehicle manufacturer</option>
                    <option value="1"></option>
                    <option value="2"></option>
                  </select>
                </div>
                <div class="mb-3">
                  <select id="vehicle-model" class="form-select">
                    <option selected disabled>Choose your vehicle model</option>
                    <option value="1"></option>
                    <option value="2"></option>
                  </select>
                </div>
                <div class="mb-3">
                  <input type="text" id="" class="form-control" placeholder="Enter your vehicle year">
                </div>
                <div class="mb-3">
                  <input type="text" id="" class="form-control" placeholder="License plate">
                </div>
                <div class="mb-3">
                  <select id="vehicle-color" class="form-select">
                    <option selected disabled>Choose your vehicle color</option>
                    <option value="1">Blue</option>
                    <option value="2">Black</option>
                  </select>
                </div>
              </form>
              <div class="col-2"></div>
            </div>
        </div>
    </div>
    <div class="col-10 bg-white">
      <form action="">
        <button><p>Submit</p><i class='bx bx-chevron-right'></i></button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>