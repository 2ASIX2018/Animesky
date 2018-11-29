<?php
session_start();
$user="Anònim";
$role="";

if (isset($_SESSION['username'])) {
  $user=$_SESSION['username'];
  if (isset($_SESSION['role']) && $_SESSION['role']=="admin") $role="(administrador)";
  else $role="";
} else if (isset($_COOKIE['Animesky'])){
      $_SESSION['username'] = $_COOKIE['Animesky'];
      if (isset($_COOKIE['Animesky'])) $_SESSION['role'] = $_COOKIE['Animesky'];
      if ($_SESSION['role']=="admin") $role="(administrador)"; else $role="";
      $user=$_SESSION['username'];
}

echo $userLabel=$user.$role;
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
            
              <a class="nav-link" href="index.php">Home</a>
            
            
              <a class="nav-link" href="loginForm.php">Login</a>
            
              
              <?php
          if(isset($_SESSION['role'])&& $_SESSION['role']=='admin'){

            ?>
              <a class="nav-link" href="admin.php">Admin</a>
              <a class="nav-link" href="logout.php">Cerrar sesion</a>
          
          <?php
     }
     ?>
            <?php
          if (isset($_SESSION['role'])&& $_SESSION['role']=='user'){
            ?>
              <a class="nav-link" href="logout.php">Cerrar sesion</a>
              <a class="nav-link" href="AñadirS.php">Añadir Serie</a>
              <a class="nav-link" href="AñadirC.php">Añadir Capitulo</a>


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

      <!--<div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
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
        <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
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
        <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="bokunoheroacademia.html"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Boku No Hero Academia</a>
              </h4>
              <p class="card-text">Serie completa de Boku No Hero Academia</p>
            </div>
          </div>
        </div> 
        
        
      </div> -->


       <div class="row" >
       <?php

       require_once("models/serie.php");
       $gestorseries=new Serie();
       $series=$gestorseries->llistaSeries();

      for($i=0; $i<count($series); $i++)
      {
        if ($series[$i]["Idserie"]==1)
      {
      
     ?>

     <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a><img class="card-img-top" src="equipo2.jpg<?php echo base64_encode($series[$i]["imagen"]); ?>"><a>
            <a href="capitols.php" \ >
            <div class="card-body">
              <h4 class="card-title"> <?php echo( $series[$i]["Nom"]); ?></h4>
              <p class="card-text"><?php echo ($series[$i]["Idioma"]); ?></p>
              <h4 class="card-title"> <?php echo( $series[$i]["Genere"]);?></h4>
            </div>
          </div>
        </div>
        <?php 
          } 
        }
         
        ?>
    
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