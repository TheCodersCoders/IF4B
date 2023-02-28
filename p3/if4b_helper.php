<?php
    function salam(){echo "Belajar Function";}
    function getProdi($kode_prodi){$prodi = [11 => "Manajamen Informatika", 20 => "Manajemen", 21 => "Akutansi", 24 => "Sistem Informasi", 25 => "Informatika", 27 => "Tehnkik Electro"]; return $prodi[$kode_prodi];}
    function getProdiByNPM($npm){return getProdi(substr($npm, 4, 2));};
?>