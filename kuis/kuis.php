<?php
   $dataMahasiswa = [
        [ 'npm' =>  001,
        'nama' => "ahmad",
        'jk'=>"L",
        ],
        [
            'npm' => 001,
            'nama' => "umar",
            'jk' => "L"
        ],
        [
            'npm' => 003,
            'nama' => "aisyah",
            'jk' => "P"
        ],
    ];
   echo "<table>";
   foreach($dataMahasiswa as $data){
    echo "<tr>
    <td>NPM</td>
    </tr>";
   }

   echo "</table>";
 ?>