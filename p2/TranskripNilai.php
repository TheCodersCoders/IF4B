<?php
// $nilai = array(
//     2.30, 3.30,2,70, 3.00, 4.00, 3.30,4.00,2.00,2.30,3.70,
//     4.00,2.00,3.00,4.00,4.00,4.00,3.30,4.00,4.00,4.00,3,70
//     ,3.00,3.30
// );
// $huruf_nilai = array("C+","B+","B-", "B", "A", "B+", "A",
//     "C", "C+","A-", "A", "C", "B", "A", "A","A","B+","A","A", "A", "A-"
//     ,"B","B+"
// );

echo "<h1>Transkrip Nilai</h1>";

$mahasiswa = [
    [
        "mata_kuliah" => "Algoritma Struktur Data",
        "kode_mk" => "I1206",
        "hm" => "C+",
        "am" => 2.30,
        'k' => 3,
        "m" => 6.9

    ],
    [
        "mata_kuliah" => "Algoritma Struktur Data II",
        "kode_mk" => "IF0017",
        "hm" => "B+",
        "am" => 3.30,
        'k' => 3,
        "m" => 9.9

    ],
    [
        "mata_kuliah" => "Aljabar Linier dan Matriks",
        "kode_mk" => "l1206",
        "hm" => "B-",
        "am" => 2.70,
        'k' => 4,
        "m" => 10.8

    ],
    [
        "mata_kuliah" => "Bahasa Inggris I",
        "kode_mk" => "R0001	",
        "hm" => "B",
        "am" => 3.00,
        'k' => 2,
        "m" => 6

    ],
    [
        "mata_kuliah" => "Basis Data I",
        "kode_mk" => "I1213	",
        "hm" => "A",
        "am" => 4,
        'k' => 4,
        "m" => 16

    ],
   
];
echo "<table border=1";
echo "<ul>";
foreach($mahasiswa as $data){
    echo "<tr><td>".$data['mata_kuliah']."</td> <td>"
    .$data['kode_mk']."</td><td> ".$data['hm']."</td>
    <td>".$data['am']."</td><td>".$data['k']."</td><td>".
    $data['m']."</td> </tr>"        
    ;
}
echo "</ul>";
echo "</table>"
?>