<?php 
     echo "<h2>Biodata Saya</h2>";
     $npm = "2125250066";
     $nama = "Raden George Samuel Budi";
     $jk = "Laki-Laki";
     $usia = 17;
     $tinggi = 165;
     
     echo "<br/>";
     echo "NPM : ".$npm."<br/>";
     echo "Nama : ".$nama."<br/>";
     echo "Jenis Kelamin : ".$jk."<br/>";
     echo "Usia : ".$usia."<br/>";
     echo "Tinggi : ".$tinggi."<br/>"; 
     
     $kode_prodi = substr($npm, 4,2);
     $prodi = "";
     if($kode_prodi == "24") { // kode dari npm = 24
         $prodi = "Sistem Informasi"; 
     } else if ($kode_prodi == "25") {
         $prodi = "Informatika";
     } else if ($kode_prodi == "27") {
         $prodi = "Teknik Elektro";
     } else if ($kode_prodi == "20") {
         $prodi = "Manajemen";
     } else if ($kode_prodi == "21") {
         $prodi = "Akuntansi";
     } else {
         $prodi = "Tidak Ditemukan";
     }
 
     echo  "Prodi : $prodi";
?>