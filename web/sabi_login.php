<?php
// Start the session
session_start();
// Check for error messages in the session
if (isset($_SESSION['error_message'])) {
    echo "<p style='color:red;'>" . $_SESSION['error_message'] . "</p>";
    // Clear the error message after displaying it
    unset($_SESSION['error_message']);
}
// Enable error reporting for debugging
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="../style/sabi_login.css"> -->
    <link rel="icon" type="image/x-icon" href="../sabimages/Sabiride3.png">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/verification.css">

</head>

<!-- Note: Abstract CSS class = .login -->

<body>
    <div class="container-fluid">
        <div class="login row g-3 align-items-center justify-content-center mt-1">
            <img class="d-block text-center" id="nav-logo" src="../sabimages/Sabiride3-cropped.png" alt="">
        </div>
        <div class="d-flex flex-row justify-content-center align-items-center mt-3">
            <span class="text-nowrap text-center p-2 display-5 fw-bold" id="">LOG IN</span>
        </div>
    </div>
    <!-- modal trigger form -->

    <div class="container">
        <div id="driver-info" class="login d-flex flex flex-column bg-light gap-3 p-2 justify-content-between align-items-center mt-5">
            <button type="button" class="col-12 btn" id="username" data-bs-toggle="modal" data-bs-target="#Modal">Email or Username</button>
            <button type="button" class="col-12 btn" id="phone-number" data-bs-toggle="modal" data-bs-target="#Modal2">Phone number</button>
        </div>
    </div>
    <!-- username option -->

    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="eModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="ModalLabel">
                        <p id="label">Email or Username</p>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post" id="form1">
                        <div class="row">
                            <div class="col input-control">
                                <div>
                                    <input type="text" id="user" name="identifier" placeholder="Email or Username" required>
                                    <div id="error">Please enter an input</div>
                                </div>
                                <br>
                                <div>
                                    <input type="password" id="user" name="password" placeholder="Password" required>
                                    <div id="error">Please enter an input</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" id="btn" class="btn"><span>SIGN IN</span><i class='bx bx-right-arrow-alt'></i></button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </form>
    <!-- phone number option -->
    <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="ModalLabel">
                        <p id="label">Phone number</p>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post" id="form2">
                        <div class="row">
                            <div class="mb-3">
                                <div>
                                    <input type="tel" id="user" name="identifier" placeholder="Phone number" required>
                                    <div id="error">Please enter an input</div>
                                </div>
                                <br>
                                <div>
                                    <input type="password" id="user" name="password" placeholder="Password" required>
                                    <div id="error">Please enter an input</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" id="btn" class="btn"><span>SIGN IN</span><i class='bx bx-right-arrow-alt bx-fade-right'></i></button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
    <!-- Outgoing -->
    <p id="forget-password" class="text-center"><a href="reset_request.php">Forget Password</a></p>
    <p id="create-account" class="text-center">Don't have an account? <a href="driver.php">Sign up here</a></p>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script>
        const btn1 = document.querySelector("#username");
        const btn2 = document.querySelector("#phone-number");
        const btn3 = document.querySelector("#username2");
        const btn4 = document.querySelector('#button');
        const btn5 = document.querySelector('#button2');
        const err = document.querySelector('#error');
        const err2 = document.querySelector('#form2 #error');
        document.addEventListener("DOMContentLoaded", function(e) {
            e.preventDefault();
            btn1.addEventListener('click', function() {
                document.querySelector('#form2').style.display = "none";
                document.querySelector('#form1').style.display = "block";
            })
            btn2.addEventListener('click', function() {
                document.querySelector('#form1').style.display = "none";
                document.querySelector('#form2').style.display = "block";
            })
            btn3.addEventListener('click', function() {
                document.querySelector('#form2').style.display = "none";
                document.querySelector('#form1').style.display = "block";
            })
            btn4.addEventListener('click', function() {
                if (document.querySelector('#user').value === "") {
                    err.style.display = "block";
                    setTimeout(function() {
                        err.style.display = "none";
                    }, 5000)
                } else {
                    window.location.href = "sabi_login.html";
                }
            })
            btn5.addEventListener('click', function() {
                if (document.querySelector('#form2 #user').value === "") {
                    err2.style.display = "block";
                    setTimeout(function() {
                        err2.style.display = "none";
                    }, 5000)
                } else {
                    window.location.href = "sabi_verification.html";
                }
            })
        })
    </script>
</body>

</html>
