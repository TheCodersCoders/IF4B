<?php 
function getJk($jk){
    if($jk == "L"){
       return "Laki - laki";
    }
    else if($jk == "P"){
        return "Perempuan";
    }
}
function getKota($kota){
    if($kota == "1"){
        return "Olympus";
    }
    else if($kota == "2"){
        return "Asgardian";
    }
    else if($kota == "3"){
        return "Belitung";
    }
    else if($kota == "4"){
        return "Luxville";
    }
    else if($kota == "5"){
        return "Wakanda";
    }
    else if($kota == "6"){
        return "Atlantis";
    }
    else if($kota == "7"){
        return "Kamar - Taj";
    }
    else {
        return "Kota Tidak ada";
    }
}

    function getTgl($tanggal){
        // pisahkan tanda - dan jadikan array
        $datetime = DateTime::createFromFormat('Y-m-d', $tanggal);
        return $datetime->format('d-m-Y');
      }


?>