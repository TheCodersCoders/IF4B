<?php 
    require_once("Mobil.php");
    // Object
    $mobil1 = new Mobil();
    $mobil2 = new Mobil();
    $mobil1->warna = "Merah";
    $mobil2->warna = "Hitam";
    $mobil1->merek = "Toyota";
    $mobil2->merek = "Slow Honda";
    $mobil1->setHarga(200000000);
    $mobil2->setHarga(250000000);
    // Print Out
    echo "Mobil 1 berwarna ".$mobil1->warna." dengan merek ".$mobil1->merek. " dengan harga : ".$mobil1->getHarga()."<br>";
    echo "Mobil 2 berwarna ".$mobil2->warna." dengan merek ".$mobil2->merek. " dengan harga : ".$mobil2->getHarga();
?>