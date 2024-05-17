<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sabi ride</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="all" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" media="all" type="text/css">
</head>
<body>
<section id="app">

    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
            <section class="col-md-12">

          

                <h1></h1>
                <h5 class="d-flex justify-content-between align-items-center">
                    <a href=""></a>
                    <span class="date-time"></span>
                </h5>
                <article class="bg-article p-3"><img class="float-right mb-2 ml-2" style="width: 18rem;" src="<?= asset($post->image) ?>" alt=""><?= $post->body ?></article>
                
                    <section>post not found!</section>
                    
            </section>
        </section>
    </section>


</section>
<footer class="page-footer font-small blue py-4 my-3">
  <div class="container text-center text-md-left">

    <div class="row">
      <div class="col-md-3 mt-md-0 mt-3">
        <img src=".   ./sabimages/Sabi ride 2.png" width="150" alt="">
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="fw-bold">Sabi Ride</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">Rides</a>
          </li>
          <li>
            <a href="#!">Food Delivery</a>
          </li>
          <li>
            <a href="#!">Dispatch </a>
          </li>
          <li>
            <a href="#!">Vip </a>
          </li>
        </ul>
      </div>

      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="fw-bold">Partner with Sabi Ride</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">sign up as driver</a>
          </li>
          <li>
            <a href="#!">Sign ypur car as vip</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="fw-bold">Company</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">About us</a>
          </li>
          <li>
            <a href="#!">News and Update</a>
          </li>
          <li>
            <a href="#!">Brand guidelines</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2023 Copyright:
    <a href="/"><img src="../sabimages/instagram.png" alt="" class="px-2" width="60"></a>
    <a href="/"><img src="../sabimages/facebook.png" alt="" class="px-2" width="60"></a>
    <a href="/"><img src="../sabimages/twitter.png" alt="" class="px-2" width="60"></a>
  </div>
</footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>