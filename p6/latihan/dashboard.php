<?php
session_start();
if(isset($_POST['username']) && isset($_POST['nama'])){
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['nama'] = $_POST['nama'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Universitas MDP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<section class="py-5 mt-4 ">
  <div class="container text-center">
    <h2 class="fw-light">Selamat Datang 
      <br>
    <?php 
    if($_SESSION['username'] && $_SESSION['nama']){
      echo $_SESSION['nama']." " ;
        echo $_SESSION['username'];
    }
    ?>
    </h2>
  </div>
</section>
</body>
</html>