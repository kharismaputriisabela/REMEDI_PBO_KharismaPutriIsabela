<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_remedi_pbo_trpl1a_kharismaputriisabela";

$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    die("Koneksi Gagal : " . mysqli_connect_error());
}