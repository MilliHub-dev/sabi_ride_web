<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Page</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Boxicon icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="../sabimages/Sabiride3.png">
    <!-- verification css -->
    <link rel="stylesheet" href="../style/verification.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row g-0 justify-content-center">
            <div class=" brand-name col-12 align-self-center text-center mt-5">
                <span id="sabi">Sabi </span><span>Driver</span>
            </div>


            <div class=" col-12 text-center align-self-center">
                <hr class="text-center center-block-elem">
            </div>


            <div class="col-12">
                <p class="text-center display-h2 fw-bold">Enter Code</p>
            </div>


            <div col-12 class="text-center">
                <p class="text-center text-black-50 " id="txt">A verification code was sent to<span class="fw-bold text-truncate" id="num"> +234...</span></p>
            </div>


            <form action="" method="post">

                <div class="col-12 text-center">
                    <label class="col-12 fw-bold text-center" id=" error">
                        <input class="text-center" type="tel" id="code" autofocus>
                        <p id="error" class="text-danger"></p>
                        <p class="text-center sabi-color mt-3">Resend Code</p>
                    </label>
                </div>




                <div class="row justify-content-center">
                    <div class="col-12 center-flex-elem mt-4">
                        <button type="button" class=" icon-button" id="submit"><span>Continue</span><i class='bx bx-right-arrow-alt bx-fade-right-hover mt-1'></i></button>
                    </div>
                </div>

        </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        const error_text = "Please enter the code";
        const text = document.getElementById('code');
        const error = document.getElementById('error');
        const btn = document.getElementById('submit');
        btn.addEventListener("click", function() {
            if (text.value === "") {
                error.innerHTML = error_text;
                error.ClassList.add("text-danger");
                code.style.top = "10px";
                btn.style.top = "10px"
                setTimeout(function() {

                    error.style.display = "none";
                    code.style.top = "70px";
                    btn.style.top = "80px"
                }, 3000);
            } else {
                window.location.href = "sabi_verification1.html";
            }
        })
    </script>
</body>

</html>
