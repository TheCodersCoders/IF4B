<?php

echo "<h1>Transkrip Nilai</h1>";
require("nilai.php");
$mahasiswa = [
    [ "mata_kuliah" => "Algoritma Struktur Data", "kode_mk" => "I1206","hm" => "C+",'k' => 3,],
    ["mata_kuliah" => "Algoritma Struktur Data II", "kode_mk" => "IF0017","hm" => "B+",'k' => 3,],
    ["mata_kuliah" => "Aljabar Linier dan Matriks","kode_mk" => "l1206","hm" => "B",'k' => 4,],
    ["mata_kuliah" => "Bahasa Inggris I","kode_mk" => "R0001	","hm" => "B",'k' => 2,],
    [ "mata_kuliah" => "Basis Data I","kode_mk" => "I1213	","hm" => "A",'k' => 4,],
];
echo "<table border=1";
echo "<ul>";

echo "<tr>
<td>Mata Kuliah</td>
<td>Kode Kelas</td>
<td>HM</td>
<td>AM</td>
<td>K</td>
<td>M</td>
</tr>";
foreach($mahasiswa as $data){
    echo "<tr>
    <td>".$data['mata_kuliah']."</td>
     <td>"
    .$data['kode_mk']."</td><td> ".$data['hm']."</td>
    <td>".getAM($data['am'])."</td><td>".$data['k']."</td><td>".
    getM(getAM($data['hm']), $data['k'])."</td> </tr>";        
}
echo "</ul>";
echo "</table>"
?>