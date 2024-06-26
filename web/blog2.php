<?php 

require_once("../db/config.php");


$query = 'SELECT title, content, image_url, created_at FROM blog_posts ORDER BY created_at DESC';
$stmt = $pdo->query($query);
$posts = $stmt->fetchAll();

?>

<!doctype html>
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
  <!-- NAVBAR -->
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
  <!-- BLOG PAGE -->

  <div class="col-md-4 container BLOG my-4">
    <h6 class="mb-0 fw-bold">LATEST</h6>
    <hr>
    <div class="row">
      <div class="col-4 mb-md-4 mb-3">
    <?php foreach ($posts as $post): ?>
        <div class="post">
            <h2><?php echo htmlspecialchars($post['title']); ?></h2>
            <?php if (!empty($post['image_url'])): ?>
                <img src="<?php echo htmlspecialchars($post['image_url']); ?>" width ="300" alt="<?php echo htmlspecialchars($post['title']); ?>">
            <?php endif; ?>
            <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
          
            <small><?php echo htmlspecialchars($post['created_at']); ?></small>
        </div>
    <?php endforeach; ?>
      </div>
      <div class="col-4 mb-md-4 mb-3 float-end text-end">
        <h3 class="fw-bold"></h3>
        <h5 class="fw-light"></h5>
        
      </div>

    </div>

  </div>



  <!-- FOOTER -->

  <?php require_once("../include/footer.php"); ?>








  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
