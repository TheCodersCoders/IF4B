<?php

function getAM($kode_Am){
        $am = [
            'A' => "4",
            'A-' => "3.7",
            'B+' => "3.3",
            'B' => "3",
            'C+' => "2.7",
            'C' => "2.0",
            'D' => "1,7",
            'E' => "1,5"
        ];
        return $am[$kode_Am];
    }
    function getAmByHM($hm){
        return getAM(substr($hm,0,3 ));
    }
    function getM($am,$k){ 
        return $am * $k;
    }
    
    function getIPK($total_m,$total_k){
        return number_format(($total_m / $total_k),2);
    }
    function getPredikatKelulusan($ipk, $adaD = false){
        if($ipk > 2.5 && $ipk< 2.75 ){
            return "Lulus";
        }
        else if($ipk >= 2.76 && $ipk <= 3.0){
            return "Memuaskan";
        }
        else if($ipk >= 3.01){
            return "Sangat Memuaskan";
        }
        else if($ipk >= 3.51){
            if($adaD == true){
                return "Sangat Memuaskan";
            }
            return "Dengan Pujian";
        }
        
    }

    function getSyaratYudisium($ipk, $adaE = false, $nilai_ta = true, $total_d){
        $yudisium = "";
        if($ipk >= 2.50) {
        if( $adaE == true && $nilai_ta == false && $total_d >= 8){
                $yudisium =  "Tidak Bisa Mengikuti Yudisium";
            }
        else if(  $adaE == false && $nilai_ta == true && $total_d >= 8){
                $yudisium =  "Tidak Bisa Mengikuti Yudisium";
            }
        else if( $adaE == false && $nilai_ta == false && $total_d <= 8){
                $yudisium =  "Tidak Bisa Mengikuti Yudisium";
            }
        else if($adaE == true && $nilai_ta == true && $total_d <= 8){
                $yudisium =  "Tidak Bisa Mengikuti Yudisium";
            }
        else if($ipk <= 2.50){
            $yudisium =  "Tidak Bisa mengikuti Yudisium";
        }
        }
        else if($ipk >= 2.50){
            $yudisium = "Bisa Mengikuti Yudisium";
        }
        return $yudisium;
    }

   
?>