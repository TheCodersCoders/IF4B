<?php 
// memulai session
 session_start();
 
 if(isset($_POST['out'])){
    session_unset();
    $_SESSION['sukses'] = "Sampai Jumpa Kembali";
    header('Location: login.php');
 }
 



 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sampai Jumpa Kembali</title>
 </head>
 <body>
 <?php 
    if(isset($_SESSION['username']) && isset($_SESSION['name'])){
        echo $_SESSION['username'];
        echo $_SESSION['name'];
    }
    ?>
    <h2>Apakah yakin mau log out???</h2>
 <form action="" method="POST">
 <button class="btn" value="unset session" name="out">Hover Me!</button>
    </form>
 </body>
 </html>

 <?php 
   session_destroy();
 ?>