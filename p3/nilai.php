<?php

function getAM($nilai){
    $am = ["A" => 4,"A-" => 3.7,"B+" => 3.3, "B" => 3,"C+" => 2.7,"C" => 2.3,"D" => 2,"E" => 1.7];
    return $am[$nilai];
};
function getM($am , $k){
  $m = $am * $k;
}


?>