<?php

$host = "localhost";
$port = 3306;
$user = "root";
$password = "";
$database = "belajarcrud";

$conn = mysqli_connect($host, $user, $password, $database);


if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>