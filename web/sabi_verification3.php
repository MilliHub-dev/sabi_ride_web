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
    <link rel="icon" type="image/x-icon" href="../sabimages/Sabiride3.png">

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
            <div class=" progressbar">
                <span class="bar" id="bar1"></span>
                <span class="num" id="num-active">1</span>
                <span class="bar"></span>
                <span class="num" id="num-active">2</span>
                <span class="bar"></span>
                <span class="num" id="num-active">3</span>
                <span class="bar"></span>
                <span class="num">4</span>
                <span class="bar" id="last-bar"></span>
            </div>
            <div class="row g-3 ms-5 justify-content-start">
                <div class="row justify-content-start">
                    <h2 class="fw-nowrap display-7    text-center col-6 fw-bold text-start  ">Documents</h2>
                </div>
                <form action="verification.php" method="POST" enctype="multipart/form-data">

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
                    <input type="hidden" name="driver_license_number" value="<?php echo htmlspecialchars($_POST['driver_license_number']); ?>">
                    <input type="hidden" name="driver_license_expiry" value="<?php echo htmlspecialchars($_POST['driver_license_expiry']); ?>">

                    <div class=mb-3>
                        <h2>Driver's License</h2>
                        <p class="w-75">Please provide a clear driver's license showing the license number, your name, and date of birth.</p>
                        <div>
                            <label for="inputType1" class="file-upload text-center">&#43; Upload File
                                <input type="file" id="inputType1" name="driver_license_document" accept=".jpg, .jpeg, .png" placeholder="* Upload File" required autofocus>
                            </label>
                            <p class="w-75" id="fileName1"></p>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <h2>Driver's profile photo</h2>
                        <p class="w-75">Please provide a clear portriat picture (Just your head) of yourself.
                            it should show your full face, front view, with eyes open on a white background.
                        </p>
                        <div>
                            <label for="inputType2" class="file-upload text-center">&#43; Upload File
                                <input type="file" id="inputType2" name="profile_photo" accept=".jpg, .jpeg, .png" placeholder="* Upload File" required>
                            </label>
                            <p class="w-75" id="fileName2"></p>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <h2>Exterior Photo of the Car</h2>
                        <p class="w-75">Upload a clear exeterior photo that captures the plate number. Visit
                            Sample Exterior Photo.
                        </p>
                        <div>
                            <label for="inputType3" class="file-upload text-center">&#43; Upload File
                                <input type="file" id="inputType3" name="car_photo_outter" accept=".jpg, .jpeg, .png" placeholder="* Upload File" required>
                            </label>
                            <p class="w-75" id="fileName3"></p>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <h2>Interior Photo of the Car</h2>
                        <p class="w-75">Provide a clear interior photo of your car. Visit Sample Exterior Photo.</p>
                        <div>
                            <label for="inputType4" class="file-upload text-center">&#43; Upload File
                                <input type="file" id="inputType4" name="car_photo_inner" accept=".jpg, .jpeg, .png" placeholder="* Upload File" required>
                            </label>
                            <p class="w-75" id="fileName4"></p>
                        </div>
                    </div>
                    <hr style="color: lightgray;">
                    <div class="mb-3">
                        <h2>Vehicle License Certificate</h2>
                        <p class="w-75">Upload the vehicle License document of the car</p>
                        <div>
                            <label for="inputType5" class="file-upload text-center">&#43; Upload File
                                <input type="file" id="inputType5" name="vehicle_license_certification" accept=".jpg, .jpeg, .png" placeholder="* Upload File" required>
                            </label>
                            <p class="w-75" id="fileName5"></p>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <h2>Certificate of Roadworthiness</h2>
                        <p class="w-75">Picture of Roadworthiness Certificate</p>
                        <div>
                            <label for="inputType6" class="file-upload text-center">&#43; Upload File
                                <input type="file" id="inputType6" name="certification_of_roadworthiness" accept=".jpg, .jpeg, .png" placeholder="* Upload File" required>
                            </label>
                            <p class="w-75" id="fileName6"></p>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <h2>Government issued ID</h2>
                        <p class="w-75">Upload any government-issued ID here e.g. NIN slip, National ID card, International
                            Passport, Permanent Voter's Card. Driver's License.
                        </p>
                        <div>
                            <label for="inputType7" class="file-upload text-center">&#43; Upload File
                                <input type="file" id="inputType7" name="issued_id" accept=".jpg, .jpeg, .png" placeholder="* Upload File" required>
                            </label>
                            <p class="w-75" id="fileName7"></p>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <h2>Proof of Car Ownership Certificate</h2>
                        <p class="w-75">Please upload proof of ownership</p>
                        <div>
                            <label for="inputType8" class="file-upload text-center">&#43; Upload File
                                <input type="file" id="inputType8" name="proof_of_ownership" accept=".jpg, .jpeg, .png" placeholder="* Upload File" required>
                            </label>
                            <p class="w-75" id="fileName8"></p>
                        </div>
                    </div>
                    <hr><br>
                        <div class="alert alert-primary" role="alert">
                    <h4> If you have an account with any ride hailing platform fill in this section for faster verification if not leave it blank</h4>
                        </div>
                    <br>
                    <div class="mb-3">
                        <h2>screenshot of Dashboard</h2>
                        <p class="w-75">Please upload screenshot of Dashboard</p>
                        <div>
                            <label for="inputType9" class="file-upload text-center">&#43; Upload File
                                <input type="file" id="inputType9" name="screenshot_of_dashboard" accept=".jpg, .jpeg, .png" placeholder="* Upload File" >
                            </label>
                            <p class="w-75" id="fileName9"></p>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <h2>screenshot of rating with reviews</h2>
                        <p class="w-75">Please upload screenshot of rating with reviews</p>
                        <div>
                            <label for="inputType10" class="file-upload text-center">&#43; Upload File
                                <input type="file" id="inputType10" name="screenshot_of_rating" accept=".jpg, .jpeg, .png" placeholder="* Upload File" >
                            </label>
                            <p class="w-75" id="fileName10"></p>
                        </div>
                    <hr>
                    <div class="mb-3">
                        <h2>screenshot of Notification screen</h2>
                        <p class="w-75">Please upload screenshot Notification screen</p>
                        <div>
                            <label for="inputType11" class="file-upload text-center">&#43; Upload File
                                <input type="file" id="inputType11" name="screenshot_of_notification" accept=".jpg, .jpeg, .png" placeholder="* Upload File" >
                            </label>
                            <p class="w-75" id="fileName11"></p>
                        </div>
                    <hr><br>
                    <div class="row justify-content-center mb-5">
                        <div class="col-sm-12 center-flex-elem mt-4">
                            <button type="submit" class=" icon-button"><span>Continue</span><i class='bx bx-right-arrow bx-fade-right-hover mt-1'></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <hr>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script>
                const fileInput1 = document.getElementById('inputType1');
                const fileInput2 = document.getElementById('inputType2');
                const fileInput3 = document.getElementById('inputType3');
                const fileInput4 = document.getElementById('inputType4');
                const fileInput5 = document.getElementById('inputType5');
                const fileInput6 = document.getElementById('inputType6');
                const fileInput7 = document.getElementById('inputType7');
                const fileInput8 = document.getElementById('inputType8');
                const fileInput9 = document.getElementById('inputType9');
                const fileInput10 = document.getElementById('inputType10');
                const fileInput11 = document.getElementById('inputType11');

                const fileName1 = document.getElementById('fileName1');
                const fileName2 = document.getElementById('fileName2');
                const fileName3 = document.getElementById('fileName3');
                const fileName4 = document.getElementById('fileName4');
                const fileName5 = document.getElementById('fileName5');
                const fileName6 = document.getElementById('fileName6');
                const fileName7 = document.getElementById('fileName7');
                const fileName8 = document.getElementById('fileName8');
                const fileName9 = document.getElementById('fileName9');
                const fileName10 = document.getElementById('fileName10');
                const fileName11 = document.getElementById('fileName11');

                fileInput1.addEventListener('change', function() {
                    fileName1.textContent = fileInput1.files[0].name;
                });

                fileInput2.addEventListener('change', function() {
                    fileName2.textContent = fileInput2.files[0].name;
                });

                fileInput3.addEventListener('change', function() {
                    fileName3.textContent = fileInput3.files[0].name;
                });

                fileInput4.addEventListener('change', function() {
                    fileName4.textContent = fileInput4.files[0].name;
                });

                fileInput5.addEventListener('change', function() {
                    fileName5.textContent = fileInput5.files[0].name;
                });

                fileInput6.addEventListener('change', function() {
                    fileName6.textContent = fileInput6.files[0].name;
                });

                fileInput7.addEventListener('change', function() {
                    fileName7.textContent = fileInput7.files[0].name;
                });

                fileInput8.addEventListener('change', function() {
                    fileName8.textContent = fileInput8.files[0].name;
                });

                fileInput9.addEventListener('change', function() {
                    fileName9.textContent = fileInput9.files[0].name;
                });

                fileInput10.addEventListener('change', function() {
                    fileName10.textContent = fileInput10.files[0].name;
                });

                fileInput11.addEventListener('change', function() {
                    fileName11.textContent = fileInput11.files[0].name;
                });
            </script>
</body>

</html>
