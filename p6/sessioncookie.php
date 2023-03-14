<?php 
    session_start();

    // ambil $_POST
    if(isset($_POST['npm'])){
        $_SESSION['npm'] = $_POST['npm'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if($_SESSION['npm']){
        echo $_SESSION['npm'];
    }
    ?>
    <form action="" method="POST">
        NPM : <input type="text" name="npm">
        <input type="submit" value="submit">
    <a href="sessioncookie2.php"></a>
    </form>
</body>
</html>