<?php
session_start();
$user="Anonymous";
$role="";

if (isset($_SESSION['username'])) {
  $user=$_SESSION['username'];
  if (isset($_SESSION['role']) && $_SESSION['role']=="admin") $role="(Admin)";
  else $role="";

}

$userinfo=$user.$role;

?>

<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ANIMESKY</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
            
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loginformul.php">Login</a>
            </li>
            <?php
              if (isset($_SESSION['username']) && $_SESSION['role']=="admin") {
            ?>
              <li class="nav-item">
                <a class="nav-link" href="administración.php">Administración</a>
              </li>
              <?php              
              }
           ?>
            
              
              
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Animesky
        <small>Anime gratis online</small>
      </h1>

      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="dragonballz.html">Dragon Ball Z</a>
              </h4>
              <p class="card-text">Serie completa de Dragon Ball Z</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="dragonballsuper.html">Dragon Ball Super
                </a>
              </h4>
              <p class="card-text">Serie completa de Dragon Ball Super</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="bokunoheroacademia.html"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="bokunoheroacademia.html">Boku No Hero Academia</a>
              </h4>
              <p class="card-text">Serie completa de Boku No Hero Academia</p>
            </div>
          </div>
        </div>
        
        
      </div>
      <!-- /.row -->

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Anterior</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Siguiente</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Jhonnathan Sánchez & Vicent Almiñana</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>