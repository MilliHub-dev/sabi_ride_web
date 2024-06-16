 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
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
       <div class=" progressbar">
         <span class="bar" id="bar1"></span>
         <span class="num" id="num-active">1</span>
         <span class="bar"></span>
         <span class="num">2</span>
         <span class="bar"></span>
         <span class="num">3</span>
         <span class="bar"></span>
         <span class="num">4</span>
         <span class="bar" id="last-bar"></span>
       </div>

       <div class="row g-3 ms-5 justify-content-start">
         <p class="fw-nowrap col-6 fw-bold text-start">Personal Information and vehicle details</p>

         <form action="sabi_verification2.php" class="needs-validation" no-validate method="POST" enctype="multipart/form-data">
           <div class="mb-3 ">
             <label for="f-name">First Name</label>
             <input type="text" name="first_name" id="f-name" class="form-control" autofocus required>
             <div id="error_msg"></div>
           </div>
           <div class="mb-3  ">
             <label for="m-name">Middle Name</label>
             <input type="text" id="m_name" name="middle_name" class="form-control" required>
           </div>
           <div class="mb-3  ">
             <label for="l-name">Last Name</label>
             <!-- autocapitalize only works on safari -->
             <input type="text" id="l-name" name="last_name" class="form-control" autocapitalize="characters">
           </div>
           <div class="mb-3 col-sm-12">
             <label for="gender">Gender</label>
             <select id="gender" name="gender" class="form-select w-50" required>
               <option selected disabled>Choose a gender</option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>
             </select>
           </div>
           <div class="mb-3 ">
             <label for="referral_code">Referral code</label>
             <input type="text" id="disabledTextInput" class="form-control" name="referral_code" required>
             <label style="font-size: 18px; color: #6D7D8B; font-weight: 500;">If someone refered you, enter their code</label>
           </div>
           <div class="mb-3 ">
             <label for="driver_type">Driver type</label>
             <select id="driver_type" name="driver_type" class="form-select w-50" required>
               <option selected disabled>Driver type</option>
               <option value="Car_driver">Car Driver</option>
               <option value="Dispatch">Dispatch</option>
             </select>
           </div>
           <div class="mb-3 ">
             <label for="v-manufacturer">Vehicle manufacturer</label>
             <select id="v-manufacturer" name="vehicle_manufacturer" class="form-select w-50" required>
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

           <div class="mb-3 ">
             <label for="vehicle_model"> Vehicle model</label>
             <input type="text" id="vehicle_model" name="vehicle_model" class="form-control" required>
           </div>

           <div class="mb-3 ">
             <label for="vehicle_year" ehicle model> Vehicle year</label>
             <input type="number" id="vehicle_year" name="vehicle_year" class="form-control w-50" required>
           </div>

           <div class="mb-3 ">
             <label for="license_plate"> License plate</label>
             <input type="text" id="license_plate" name="license_plate" class="form-control" required>
           </div>

           <div class="mb-3 ">
             <label for="license_plate"> Vehicle color</label>
             <select id="vehicle-color" name="vehicle_color" class="form-select w-50" required>
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
           <div class="row justify-content-center mb-5">
             <div class="col-sm-12 center-flex-elem mt-4">
               <button type="button" class=" icon-button"><span>Continue</span><i class='bx bx-right-arrow bx-fade-right-hover mt-1'></i></button>
             </div>
           </div>
         </form>

       </div>
     </div>
   </div>
   </div>
   <script>
     document.getElementById("num-active").ClassList.add("num-active");
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>

 </html>
