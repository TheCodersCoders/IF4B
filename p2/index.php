<?php 
$nama = "George";
$npm = 2125250066;
$jk = "Laki - laki";
$hobi = array("Main Game ", "Belajar ", "Dance ", "Ngoding");

echo "<h1>Biodata</h1>";
echo "Nama : $nama <br> Npm : $npm <br> Jenis Kelamin : $jk";
echo "<br>";
echo "<ul>";
foreach($hobi as $kegiatan) {
    echo "<li>$kegiatan</li>";
}
echo "</ul>";
// Array Asosiatif
    $mahasiswa = array(
    "npm" => 2125250066, 
    "nama" => "Raden George Samuel Budi", 
    "jk" => "Laki - laki");

 echo $mahasiswa['nama'];
 echo "<br>";
 echo $mahasiswa['npm'];
 echo "<br>";
 echo $mahasiswa['jk'];

//  array multidimensi
$mahasiswas = [
    [
        "npm" => 2125250066,
        "nama" => "George"
    ],
    [
        "npm" => 2125250067,
        "nama" => "Zangetsu"
    ]
    ];
echo "<table border=1> <tr>
    <th>Nama</th> <th>Nama Mahasiswa</th>
</tr>";

foreach($mahasiswas as $data){
    echo "<tr>
    <td>".$data['nama']."
    </td><td>".$data['npm']."</td>
    </tr>";
}
echo "</table>";

?>