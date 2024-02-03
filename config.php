<?php
$server = 'localhost';
$userdb = 'root';
$passdb = 'abudata';
$namadb = 'pesat10_ppdb';
$db = mysqli_connect($server, $userdb, $passdb, $namadb);

if(!$db){
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}