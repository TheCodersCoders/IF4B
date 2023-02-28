<?php

echo "<h1>Transkrip Nilai</h1>";
require("p3/nilai.php");
$mahasiswa = [
    [ "mata_kuliah" => "Algoritma Struktur Data", "kode_mk" => "I1206","hm" => "C+","am" => 2.30,'k' => 3,"m" => 6.9],
    ["mata_kuliah" => "Algoritma Struktur Data II", "kode_mk" => "IF0017","hm" => "B+","am" => 3.30,'k' => 3,"m" => 9.9],
    ["mata_kuliah" => "Aljabar Linier dan Matriks","kode_mk" => "l1206","hm" => "B-","am" => 2.70,'k' => 4,"m" => 10.8],
    ["mata_kuliah" => "Bahasa Inggris I","kode_mk" => "R0001	","hm" => "B","am" => 3.00,'k' => 2,"m" => 6],
    [ "mata_kuliah" => "Basis Data I","kode_mk" => "I1213	","hm" => "A","am" => 4,'k' => 4,"m" => 16],
];
echo "<table border=1";
echo "<ul>";
foreach($mahasiswa as $data){
    echo "<tr><td>".$data['mata_kuliah']."</td> <td>"
    .$data['kode_mk']."</td><td> ".$data['hm']."</td>
    <td>".getAM($data['am'])."</td><td>".$data['k']."</td><td>".
    getM(getAM($data['hm']), $data['k'])."</td> </tr>";        
}
echo "</ul>";
echo "</table>"
?>