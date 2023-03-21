  <?php
require("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nis = $_POST['nis']; 
    $nama = $_POST['nama']; 
    $jk = $_POST['jk']; 
    $kota = $_POST['kota']; 
    $tanggal = $_POST['tanggal']; 
    $foto = $_FILES['foto'];
    $temp = explode(".", $_FILES["foto"]["name"]);
    $newfilename = $nis.'.'.end($temp);
    move_uploaded_file($_FILES["foto"]["tmp_name"], "uploads/" . $newfilename);
  
}
else{echo "Silahkan Isi form terlebih dahulu";}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Biodata</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">  
     <h1 class="text-center">Form Registrasi</h1>
  <table class="table col-lg-6">
  <thead class="text-center">
    <tr class="opacity-75">
      <td scope="col">NIS : <?php echo $nis ?></td>
    </tr>
      <tr class="opacity-75">
      <td scope="col">Nama : <?php echo $nama ?></td>
      <td rowspan="5"><img src="uploads/<?php echo $newfilename ?>" width="200px"/></td>
      </tr>
      <tr class="opacity-75">
      <td scope="col">Jenis Kelamin : <?php echo getJk($jk) ?></td>
      </tr>
      <tr class="opacity-75">
      <td scope="col">Kota Kelahiran : <?php  getKota($kota) ?> </td>
      </tr>
      <tr class="opacity-75">
      <td scope="col">Tanggal Lahir : <?php echo getTgl($tanggal) ?> </td>
      </tr>
     
   
  </thead>
</table>
</div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>