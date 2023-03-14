<?php
// memulai session
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$users = [
    ["username" => 2125250001, "password" => 111, "nama" => "Ahmad"],
    ["username" => 2125250002, "password" => 222, "nama" => "Umar"],
    ["username" => 2125250003, "password" => 333, "nama" => "Ali"],
    ["username" => 2125250004, "password" => 444, "nama" => "Usman"]
];

$canLogin = false;
foreach($users as $data){
    if($data['username'] == $username && $data['password'] == $password){
        $canLogin = true;

    }
}
?>
