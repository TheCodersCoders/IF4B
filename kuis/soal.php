<?php
// Kuis Pemrograman Web II - IF4B
// ==============================
// Mahasiswa diizinkan mengakses dokumentasi seperti php.net, w3schools, bootstrap, repository github pw2 mahasiswa
// Mahasista TIDAK diizinkan mengakses ChatGPT untuk menyelesaikan soal kuis ini

// ==========================================================================================
// PERHATIAN
// ==========================================================================================
// 1. Berdoa terlebih dahulu agar diberi kemudahan dalam menjawab soal
// 2. Percaya diri dengan kemampuan yang dimiliki dalam menjawab soal
// 3. Dilarang kerja sama, berbagi jawaban dengan peserta lain 
// 4. Buat folder "kuis" di dalam folder htdocs
// 5. RENAME soal.txt menjadi soal.php dan simpan di dalam folder "kuis"
// 6. Setelah selesai menjawab atau waktu habis, silakan zip folder "kuis" dan upload ke SPON
// ==========================================================================================

// soal 1 (5 poin)
// Buat sebuah function PHP yang menerima dua parameter angka dan mengembalikan hasil penjumlahan dari kedua angka tersebut?

// TULIS JAWABAN SOAL KE-1 DI BAWAH SINI YA (silakan ganti namaFunction)
function namaFunction($angka1, $angka2){
    echo $angka1 + $angka2;
}

// Contoh penggunaan : 
echo namaFunction(1, 2); // Output : 3
echo "<br>";

// ==========================================================================================

// soal 2 (15 poin)
// Buat function PHP yang menerima sebuah parameter tanggal dengan format YYYY-MM-DD dan mengembalikan tanggal dalam format Indonesia (Nama bulan dalam bahasa Indonesia: Januari, Februari, Maret, April, Mei, Juni, Juli, Agustus, September, Oktober, November, Desember)

// TULIS JAWABAN SOAL KE-2 DI BAWAH SINI YA (silakan ganti namaFunctionTgl)
function getTgl($tanggal){
    $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
    );

    $pecahkan = explode('-', $tanggal);
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}


// Contoh penggunaan :
$tanggal = date('Y-m-d'); // 2023-03-21
echo getTgl($tanggal); // Output : 21 Maret 2023

// ==========================================================================================

// soal 3 (25 poin)


  $dataMahasiswa = [
        [ 'npm' =>  001,
        'nama' => "ahmad",
        'jk'=>"L",
        ],
        [
            'npm' => 002,
            'nama' => "umar",
            'jk' => "L"
        ],
        [
            'npm' => 003,
            'nama' => "aisyah",
            'jk' => "P"
        ],
    ];
    echo "<table border=1  align='center'> 
    <tr>
    <th >NPM</th>
    <th >Nama</th>
    <th >Jenis Kelamin</th>
</tr>";
    foreach($dataMahasiswa as $data){
        echo "<tr><td>".$data['npm']."</td>
            <td>".$data['nama']."</td>
            <td>".$data['jk']."</td>
        </tr>";
    }
    echo "</table>";
// c. Hitung jumlah mahasiswa laki-laki dan perempuan, kemudian tampilkan di bawah tabel 4.b (Gunakan variabel atau function untuk mendapatkan jumlah mahasiswa laki-laki dan perempuan)


// TULIS JAWABAN SOAL KE-3 DI BAWAH SINI YA
// Buat array, tampilkan dalam bentuk tabel, jumlah mhs laki-laki dan jumlah mhs perempuan di bawah sini
$jk = [
    ['jk'=> "L"],
    ['jk'=> "L"],
    ['jk'=> "P"],
];
echo "<table>";
foreach($jk as $dataJK){
    
}
echo "</table>";

// ==========================================================================================

// soal 4 (35 poin)

$dataPegawai = [
    [
'kode'=> 001,
'nama_pegawai' => "alif",
'kode_jabatan'=> "M"
    ],
    [
'kode'=> 002,
'nama_pegawai' => "Linus",
'kode_jabatan'=> "WP"
    ],
    [
'kode'=> 003,
'nama_pegawai' => "Putra",
'kode_jabatan'=> "MP"
    ],
    [
'kode'=> 004,
'nama_pegawai' => "Rizky",
'kode_jabatan'=> "UIX"
    ],
    [
'kode'=> 005,
'nama_pegawai' => "Thomas",
'kode_jabatan'=> "DB"
    ],
    ];

echo "<table border=1  align='center' style='text-align:center;'> 
    <tr>
    <th rowspan=1>Kode</th>
    <th >Nama Pegawai</th>
    <th >Jabatan</th>
    <th >Gaji</th>
</tr>";
$total_gaji = 0;
    foreach($dataPegawai as $data){
        echo "<tr><td>".$data['kode']."</td>
            <td>".$data['nama_pegawai']."</td>
            <td>".getJabatan($data['kode_jabatan'])."</td>
            <td>".number_format(getGaji($data['kode_jabatan']))."</td>";
            $total_gaji += getGaji($data['kode_jabatan']);
       echo "</tr>";
    }
    echo "<tr><td>Total Gaji = ".number_format($total_gaji)."</td></tr>";
    echo "</table>";

    

function getJabatan($kode_jabatan){
    if($kode_jabatan == "DB"){
        return "Database Designer";
    }
    else if($kode_jabatan == "UIX"){
        return "UI/UIX Desginer";
    }
    else if($kode_jabatan == "M"){
        return "Manager";
    }
    else if($kode_jabatan == "WP"){
        return "Web Programmer";
    }
    else if($kode_jabatan == "MP"){
        return "Mobile Programmer";
    }
}
function getGaji($kode_jabatan){
    if($kode_jabatan == "DB"){
        return 9000000;
    }
    else if($kode_jabatan == "UIX"){
        return 8000000;
    }
    else if($kode_jabatan == "M"){
        return 15000000;
    }
    else if($kode_jabatan == "WP"){
        return 10000000;
    }
    else if($kode_jabatan == "MP"){
        return 10000000;
    }
}

// e. Hitung dan tampilkan total gaji semua pegawai yang harus dibayar perusahaan

// TULIS JAWABAN SOAL KE-4 DI BAWAH SINI YA

// ==========================================================================================

// soal 5 (20 poin)
/* Buat class "Alumni" dengan atribut/property "npm", "nama", "tahun_lulus", dan "tahun_diterima_kerja". 
Buat juga method getInfo() yang mengembalikan (return) informasi alumni seperti npm, nama, tahun_lulus, tahun_diterima_kerja dan waktu_tunggu_kerja alumni tersebut. Waktu_tunggu_kerja didapat dari tahun_diterima_kerja - tahun_lulus */




// Buat class Alumni di bawah sini
class Alumni {
    public $npm;
    public $nama;
    public $tahun_lulus;
    public $tahun_diterima_kerja;
    public $waktu_tunggu_kerja;
    function getInfo($val,$val2,$val3){
    return $this->npm = $val;
    return $this->nama = $val;
    return $this->tahun_lulus = $val2;
    return $this->tahun_diterima_kerja = $val3;
    return $this->waktu_tunggu_kerja = $val2-$val3;
    }
}


// Buat objek alumni1, alumni2 di bawah sini
$alumni1 = new Alumni();
$alumni1->npm = "1821200018";
$alumni1->nama = "Victoryta";
$alumni1->tahun_lulus = 2021;
$alumni1->tahun_diterima_kerja = 2021;
$alumni1->waktu_tunggu_kerja = $alumni1->tahun_lulus - $alumni1->tahun_diterima_kerja;

$alumni2 = new Alumni();
$alumni2->npm = "1821200010";
$alumni2->nama = "Belanesia";
$alumni2->tahun_lulus = 2021;
$alumni2->tahun_diterima_kerja = 2022;
$alumni2->waktu_tunggu_kerja =  $alumni2->tahun_diterima_kerja - $alumni2->tahun_lulus;

// TULIS JAWABAN SOAL KE-5 DI BAWAH SINI YA
echo "Npm : ".$alumni1->npm."<br>"."Nama : ".$alumni1->nama."<br>"."Tahun Lulus : ".$alumni1->tahun_lulus."<br>"."Tahun Diterima Kerja : ".$alumni1->tahun_diterima_kerja."<br>"."Waktu Tunggu Kerja : ".$alumni1->waktu_tunggu_kerja." Tahun <br><br>";
echo "Npm : ".$alumni2->npm."<br>"."Nama : ".$alumni2->nama."<br>"."Tahun Lulus : ".$alumni2->tahun_lulus."<br>"."Tahun Diterima Kerja : ".$alumni2->tahun_diterima_kerja."<br>"."Waktu Tunggu Kerja : ".$alumni2->waktu_tunggu_kerja." Tahun";