<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "DB_SIMULASI_PBO_KELAS_KharismaPutriIsabela";

$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    die("Koneksi Gagal : " . mysqli_connect_error());
}