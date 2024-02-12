<?php

$database_host = "localhost";
$database_username = "root";
$database_password = "";
$database_name = "db_uas_web1_fahmi";
$database_port = 3306;

$koneksi = mysqli_connect($database_host, $database_username, $database_password, $database_name, $database_port);

if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
} else {
   
}
?>