<?php
// memulai session
session_start();
if(isset($_POST['out'])){
    session_unset();
    header('Location: login.php');
    $_SESSION['sukses'] = "Sampai Jumpa Kembali";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logout.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Sampai Jumpa Kembali</title>
</head>

<body class="text-center">
    <div class="container">


        <?php
        if (isset($_SESSION['username']) && isset($_SESSION['name'])) {
            echo $_SESSION['username'];
            echo $_SESSION['name'];
        }
        ?>
        <h2 class="" style="margin-top:100px">Apakah yakin mau log out???</h2>
        <img class="mb-3" src="img/confused.png" alt="" width="200px">
        <form action="" method="POST">
            <button class="btn btn-danger" value="unset session" name="out">Log Out</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
