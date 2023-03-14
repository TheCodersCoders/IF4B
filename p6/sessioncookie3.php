<?php 
    session_start();

    // ambil $_POST
    if(isset($_POST['submit'])){
        session_unset();
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
        echo "Nilai Session saat ini ".$_SESSION['npm'];
    }
    else {
        echo "Kosong";
    }
    ?>
    <form action="" method="POST">
       <input type="submit" value="unset session" name="submit">
    </form>
</body>
</html>