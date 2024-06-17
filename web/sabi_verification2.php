<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabi Driver</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../style/verification.css">
</head>

<body>
    <div class="container-fluid text-body">
        <div class="row justify-content-center">
            <div class="mt-5 brand-name  align-self-center text-center">
                <span id="sabi">Sabi </span><span>Driver</span>
            </div>
            <div class="  text-center align-self-center">
                <hr class="text-center center-block-elem">
            </div>
            <div class="mt-1"></div>
            <div class="progressbar col-sm-12">
                <span class="bar" id="bar1"></span>
                <span class="num" id="num-active">1</span>
                <span class="bar"></span>
                <span class="num" id="num-active">2</span>
                <span class="bar"></span>
                <span class="num">3</span>
                <span class="bar"></span>
                <span class="num">4</span>
                <span class="bar" id="last-bar"></span>
            </div>
            <div class="g-3 ms-5 justify-content-center">
                <div class="row justify-content-center align-items-center">
                    <p class=" col-12 fw-bold display-7 text-wrap text-center w-75">Private and licensing details</p>
                </div>


                <form action="sabi_verification3.php" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="first_name" value="<?php echo htmlspecialchars($_POST['first_name']); ?>">
                    <input type="hidden" name="middle_name" value="<?php echo htmlspecialchars($_POST['middle_name']); ?>">
                    <input type="hidden" name="last_name" value="<?php echo htmlspecialchars($_POST['last_name']); ?>">
                    <input type="hidden" name="gender" value="<?php echo htmlspecialchars($_POST['gender']); ?>">
                    <input type="hidden" name="referral_code" value="<?php echo htmlspecialchars($_POST['referral_code']); ?>">
                    <input type="hidden" name="driver_type" value="<?php echo htmlspecialchars($_POST['driver_type']); ?>">
                    <input type="hidden" name="vehicle_manufacturer" value="<?php echo htmlspecialchars($_POST['vehicle_manufacturer']); ?>">
                    <input type="hidden" name="vehicle_model" value="<?php echo htmlspecialchars($_POST['vehicle_model']); ?>">
                    <input type="hidden" name="vehicle_year" value="<?php echo htmlspecialchars($_POST['vehicle_year']); ?>">
                    <input type="hidden" name="license_plate" value="<?php echo htmlspecialchars($_POST['license_plate']); ?>">
                    <input type="hidden" name="vehicle_color" value="<?php echo htmlspecialchars($_POST['vehicle_color']); ?>">
                    <div class="row justify-content-center">

                        <label for="driver_license_number" class="form-label text-center d-block">Driver's License number</label>
                        <input type="text" name="driver_license_number" class="form-control center-flex-elem" id="driver_license_number" autofocus required>
                        <p class="text-black-50 text-center d-block">Enter Driver's License number</p>
                    </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label class="form-label text-center d-block" for="driver_license_expiry">Driver License Expiry:</label>
                <input type="date" id="driver_license_expiry" class="form-control w-50" name="driver_license_expiry" required>
            </div>

            <div class="row justify-content-center mb-5">
                <div class="col-sm-12 center-flex-elem mt-4">
                    <button type="submit" class=" icon-button"><span>Continue</span><i class='bx bx-right-arrow bx bx-fade-right-hover mt-1'></i></button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <!-- <script>
        document.getElementById("num-active").ClassList.add("num-active");
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
