<?php

echo "<h1 align='center'>Transkrip Nilai</h1>";
require("nilai.php");
$mahasiswa = [
    [ "mata_kuliah" => "Algoritma Struktur Data", "kode_mk" => "I1206","hm"=>"C+",'k' => 3,],["mata_kuliah" => "Algoritma Struktur Data II", "kode_mk" =>"IF0017","hm" => "B+",'k' => 3,],["mata_kuliah" => "Aljabar Linier dan Matriks","kode_mk" => "l1206","hm" => "B",'k' => 4,],["mata_kuliah" => "Bahasa Inggris I","kode_mk" => "R0001	","hm" => "B",'k' => 2,],[ "mata_kuliah" => "Basis Data I","kode_mk" => "I1213	","hm" => "A",'k' => 4,],
];
 echo"<table  align='center' style='background-color: #DDF7E3;'>
    <tr style='background: aqua;border:1px solid black;'>
            
            <th rowspan=2>MataKuliah</th>
            <th rowspan=2>Kode Mata Kuliah</th>
            <th colspan=4>Prestasi</th>

    </tr>";
    echo"<tr style='background: #30E3C6; border-radius: 5px;' align='center'>
            <td>HM</td>
            <td>AM</td>
            <td>K</td>
            <td>M</td>
    </tr>";
    $total_k = 0;$total_m = 0; $adaD = false; $total_d = 0; $nilai_ta = false ; $adaE = false;
        foreach($mahasiswa as $data){
            if($data['hm'] == "D"){$adaD = true;}
            if($data['hm'] == "E"){$adaE = true;}
        $total_k += $data['k'];
        $total_m += getM(getAmByHM($data['hm']),$data['k']);
        $ipk = getIPK($total_m, $total_k);
        $adaD = false;
        echo "<tr style='background:white;' align='center' >
           
            <td style='background:#C2F9FF;'>".$data['mata_kuliah']."</td>
            <td >".$data['kode_mk']."</td>
            <td>".$data['hm']."</td>
            <td>".getAmByHM($data['hm'])."</td>
            <td>".$data['k']."</td>
            <td>".getM(getAmByHM($data['hm']),$data['k'])."</td>
            </tr>";
    }  
    echo "<tr style='background:#C2F9FF;'>
    <td colspan='4'>Jumlah</td>
    <td>$total_k</td>
    <td>$total_m</td>
    </tr>";
    echo "<tr><td colspan='4'>IPK</td>
    <td colspan='5' align='center'>". getIPK($total_m, $total_k)."</td></tr>";
    echo "<tr style='background:#C2F9FF;'><td colspan='2' >Predikat</td>
    <td colspan='4'>".getPredikatKelulusan($ipk, $mahasiswa)."</td>
    </tr>";
    echo "<tr><td colspan='2' >Yudisium</td>
    <td colspan='4'>".getSyaratYudisium($ipk, $adaE, $nilai_ta,$total_d)."</td>
    </tr>";
    echo"</table>";
?>