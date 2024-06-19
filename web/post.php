<?php
// post.php
require_once("../db/config.php");

if (!isset($_GET['id'])) {
    echo "No post ID provided.";
    exit;
}

$id = $_GET['id'];

$query = 'SELECT title, content, image_url, created_at FROM blog_posts WHERE id = :id';
$stmt = $pdo->prepare($query);
$stmt->execute(['id' => $id]);
$post = $stmt->fetch();

if (!$post) {
    echo "Post not found.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sabi Ride</title>
  <link rel="icon" type="image/x-icon" href="../sabimages/Sabiride3.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style/style1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="../style/animations.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" i href="../index.php"> <img id="nav-logo" src="../sabimages/Sabi ride 2.png" width="90px" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="driver.php">Drive or deliver</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ride</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog2.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        </ul>
        <div class="d-flex me-4 mb-1">
          <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-globe me-1" style="font-size: 1.3rem; color: rgb(0, 0, 0);"></i>EN</a>
        </div>
        <div class="d-flex">
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Help</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="sabi_login.php">Login</a>
            </li>

          </ul>
          <button style="background-color: #0088CD; outline: none; border: 0; border-radius: 20px; height: 30px; padding: 0 10px; margin-top: 5px;"><a href="driver.php" style="text-decoration: none; color: #fff;">Sign up</a></button>







        </div>
      </div>
    </div>
  </nav>
<section id="app">

    <section class="container my-5">
        <!-- Example row of columns -->
        <section class="row">
            <section class="col-md-12">

          
            <div class="post">
        <h1><?php echo htmlspecialchars($post['title']); ?></h1>
        <?php if (!empty($post['image_url'])): ?>
            <img src="<?php echo htmlspecialchars($post['image_url']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>">
        <?php endif; ?>
        <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
        <small><?php echo htmlspecialchars($post['created_at']); ?></small>
    </div>
                
            </section>
        </section>
    </section>


</section>




<footer class="page-footer font-small blue py-4 my-3">
  <div class="container text-center text-md-left">

    <div class="row">
      <div class="col-md-3 mt-md-0 mt-3">
        <img src="../sabimages/Sabi ride 2.png" width="100" alt="">
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
            <a href="#!">Sign your car as vip</a>
          </li>
          <li>
            <a href="#!"></a>
          </li>
          <li>
            <a href="#!"></a>
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
            <a href="#!"></a>
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