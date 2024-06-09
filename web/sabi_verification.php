<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verification Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <style>
            span{
                    font-family: Mulish;
                    font-size: 50px;
                    font-weight: 500;
                    line-height: 63px;
                    letter-spacing: 0em;
                    text-align: left;
                    color: #4DA1FF;
                }
                .bbox{
                    position: relative;
                    height: 63px;
                    top: 80px;
                }
                span span{
                    
                    font-family: Mulish;
                    font-size: 50px;
                    font-weight: 500;
                    line-height: 63px;
                    letter-spacing: 0em;
                    text-align: left;
                    color: #000000
                } 
            hr{
                position: relative;
                top: 70px;
                border: 1px solid black;
                margin-left: 30%;
            }
            h2{
                position: relative;
                top: 55px;
                font-family: Lato;
                font-size: 25px;
                font-weight: 700;
                line-height: 36px;
                letter-spacing: 0em;
                text-align: left;
            }
            #txt{
                position: relative;
                top: 60px;
                font-family: Lato;
                font-size: 20px;
                font-weight: 500;
                line-height: 31px;
                letter-spacing: 0em;
                text-align: left;
                color: #6D7D8BCC;
            }
            #num{
                font-family: Lato;
                font-size: 20px;
                font-weight: 700;
                line-height: 30px;
                letter-spacing: 0em;
                text-align: left;
                color: #000000;
            }
            input{
                position: relative;
                width: 110px;
                height: 36px;
                top: 62px;
                border-radius: 5px;
                border: 0;
                outline: 0;
                border: 1px solid #000000;
                background: #DAE3EA80;
            }
        #code{
            color: #4DA1FF;
            font-family: Lato;
            font-size: 20px;
            font-weight: 700;
            line-height: 32px;
            position: relative;
            top: 70px;
        }
        button{
            position: relative;
            top: 80px;
            height: 30px;
            border-radius: 10px;
            background: #4DA1FF;
            border: 0;
            color: #ffffff;
            font-family: Lato;
            font-size: 20px;
            font-weight: 700;
            line-height: 30px;
            letter-spacing: 0em;
        }
        button span{
        color: #ffffff;
        font-family: Lato;
        font-size: 20px;
        font-weight: 700;
        position: relative;
        top: -15px;
        }

        i{
        font-size: 35px;
        position: relative;
        top: -5px;
        color: #ffffff;
        }
        #error{
        margin-left: -115px;
        margin-top: 100px;
        color: #ff3860;
        font-size: 13px;
        display: none;
    }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="col-sm-12 col-md-4 col-lg-12 bbox text-center">
                <span>Sabi <span>Driver</span></span>
            </div>
            <div class="col-xl-10 col-sm-10 col-md-10 col-lg-9 col-9 ">
                <hr>
            </div>
            <h2 class="text-center">Enter Code</h2> 
            <div class="text-center">
                <span id="txt">A verification code was sent to<span id="num"> +234 805. ... .755</span></span>
            </div>
            <form action="" method="post">
                <div class="d-flex justify-content-center">
                        <input type="tel" id="text">
                        <p id="error">Please enter the code</p>
                </div>
                <p id="code" class="text-center">Resend Code</p>
                <div class="d-flex justify-content-center">
                    <button type="button"  id="button2" class="col-xs-10 col-sm-10 col-md-7 col-lg-3 col-xl-3"><span>Continue</span><i class='bx bx-right-arrow-alt'></i></button>
                </div>
                 
            </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script>
        const text = document.getElementById('text');
        const error = document.getElementById('error');
        const btn = document. getElementById('button2');
        btn.addEventListener("click", function(){
            if(text.value === ""){
                error.style.display= "block";
                code.style.top = "10px";
                    btn.style.top = "10px"
                setTimeout(function(){
                    
                    error.style.display = "none";
                    code.style.top = "70px";
                    btn.style.top = "80px"
                }, 3000);
            }
            else{
                window.location.href = "sabi_verification1.html";
            }
        })
    </script>
    </body>
</html>