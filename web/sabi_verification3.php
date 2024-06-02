<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabi Driver</title>
    <link rel="stylesheet" href="../style/sabi_verification3.css">
</head>
<body>
    <main>
        <h1><span>Sabi</span> Driver</h1>
        <hr class="first-hr">
        <div class="progress">
            <span class="bar" id="bar1"></span>
            <span class="num">1</span>
            <span class="bar"></span>
            <span class="num">2</span>
            <span class="bar"></span>
            <span class="num">3</span>
            <span class="bar"></span>
            <span class="num" id="num4">4</span>
            <span class="bar" id="last-bar"></span>
        </div>
        <p class="doc">Documents</p>

        <aside>
            <h2>Logged In</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur 
                adipisicing elit. Assumenda, nulla!
            </p>
        </aside>
        <form action="" method="post" enctype="multipart/form-data">
        <div class="box">
            <h2>Driver's License</h2>
            <p>Please provide a clear driver's license showing the license number, your name, and date of birth.</p>
            <div id="stl">
                <label for="inputType" ><b>+</b> Upload</label>
                <input type="file" id="inputType" accept=".jpg, .jpeg, .png" placeholder="* Upload File">
                <p id="fileName"></p>
            </div>
        </div>
        <hr>
        <div class="box">
            <h2>Driver's profile photo</h2>
            <p>Please provide a clear portriat picture (Just your head) of yourself.
                it should show your full face, front view, with eyes open on a white background.
            </p>
            <div id="stl">
                <label for="inputType2" ><b>+</b> Upload</label>
                <input type="file" id="inputType2" accept=".jpg, .jpeg, .png" placeholder="* Upload File">
                <p id="fileName2"></p>
            </div>
        </div>
        <hr>
        <div class="box">
            <h2>Exterior Photo of the Car</h2>
            <p>Upload a clear exeterior photo that captures the plate number. Visit
                Sample Exterior Photo.
            </p>
            <div id="stl">
                <label for="inputType3" ><b>+</b> Upload</label>
                <input type="file" id="inputType3" accept=".jpg, .jpeg, .png" placeholder="* Upload File">
                <p id="fileName3"></p>
            </div>
        </div>
        <hr>
        <div class="box">
            <h2>Interior Photo of the Car</h2>
            <p>Provide a clear interior photo of your car. Visit Sample Exterior Photo.</p>
            <div id="stl">
                <label for="inputType4" ><b>+</b> Upload</label>
                <input type="file" id="inputType4" accept=".jpg, .jpeg, .png" placeholder="* Upload File">
                <p id="fileName4"></p>
            </div>
        </div>
        <hr>
        <div class="box">
            <h2>Vehicle License Certificate</h2>
            <p>Upload the vehicle License document of the car</p>
            <div id="stl">
                <label for="inputType5" ><b>+</b> Upload</label>
                <input type="file" id="inputType5" accept=".jpg, .jpeg, .png" placeholder="* Upload File">
                <p id="fileName5"></p>
            </div>
        </div>
        <hr style="color: lightgray;">
        <div class="box">
            <h2>Certificate of Roadworthiness</h2>
            <p>Picture of Roadworthiness Certificate</p>
            <div id="stl">
                <label for="inputType6" ><b>+</b> Upload</label>
                <input type="file" id="inputType6" accept=".jpg, .jpeg, .png" placeholder="* Upload File">
                <p id="fileName6"></p>
            </div>
        </div>
        <hr>
        <div class="box">
            <h2>Government issued ID</h2>
            <p>Upload any government-issued ID here e.g. NIN slip, National ID card, International 
                Passport, Permanent Voter's Card. Driver's License.
            </p>
            <div id="stl">
                <label for="inputType7" ><b>+</b> Upload</label>
                <input type="file" id="inputType7" accept=".jpg, .jpeg, .png" placeholder="* Upload File">
                <p id="fileName7"></p>
            </div>
        </div>
        <hr>
        <div class="box">
            <h2>Proof of Car Ownership Certificate</h2>
            <p>Please upload proof of ownership</p>
            <div id="stl">
                <label for="inputType8" ><b>+</b> Upload</label>
                <input type="file" id="inputType8" accept=".jpg, .jpeg, .png" placeholder="* Upload File">
                <p id="fileName8"></p>
            </div>
        </div>
        </form>
        <hr>
        <!-- <div class="box">
            <h2>Driver's License</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, ipsam!</p>
            <button type="button">* Upload</button>
            
        </div>-->
        <!-- <hr>  -->
    </main>
    <footer>
        <button type="submit"><span class="text">Continue</span> <span class="arrow">&#8594</span></button>
    </footer>
    <script>
        const fileInput = document.getElementById('inputType');
        const fileInput2 = document.getElementById('inputType2');
        const fileInput3 = document.getElementById('inputType3');
        const fileInput4 = document.getElementById('inputType4');
        const fileInput5 = document.getElementById('inputType5');
        const fileInput6 = document.getElementById('inputType6');
        const fileInput7 = document.getElementById('inputType7');
        const fileInput8 = document.getElementById('inputType8');

        const fileName = document.getElementById('fileName');
        const fileName2 = document.getElementById('fileName2');
        const fileName3 = document.getElementById('fileName3');
        const fileName4 = document.getElementById('fileName4');
        const fileName5 = document.getElementById('fileName5');
        const fileName6 = document.getElementById('fileName6');
        const fileName7 = document.getElementById('fileName7');
        const fileName8 = document.getElementById('fileName8');
      
        fileInput.addEventListener('change', function() {
          fileName.textContent = fileInput.files[0].name;
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
          fileN5.textContent = fileInput5.files[0].name;
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
      </script>
</body>
</html>
