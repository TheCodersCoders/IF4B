<?php
// memulai session
session_start();
if (isset($_POST['username'])) {
    header('Location: proses.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/login.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
</head>
<style>
  body{
  background-image: url("img/bg-login.jpg");
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover; 
  }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5 bg-dark opacity-75" style="color: white">
                    <div class="card-body p-4 p-sm-5" style="color: white">
                        <h5 class="card-title text-center mb-5 fw-light " style="font-size: 20px;">Sign In</h5>
                        <?php
                        if (isset($_SESSION['error'])) {
                            echo "<h5 class='text-danger'>" . $_SESSION['error'] . "</h5>";
                            unset($_SESSION['error']);
                        }
                        if (isset($_SESSION['sukses'])) {
                            echo "<h5 class='text-success'>" . $_SESSION['sukses'] . "</h5>";
                            unset($_SESSION['sukses']);
                        }
                        ?>
                        <form action="proses.php" method="POST" style="color: black">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="username">
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="floatingPassword">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-success btn-login text-uppercase fw-bold" type="submit">Masuk
                                </button>
                            </div>
                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>