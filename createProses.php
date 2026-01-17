<?php

include "koneksi.php";

if (isset($_POST['tambah'])){
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $usia = $_POST['usia'];

    $sql = "INSERT INTO users(nama, email, usia VALUES ('$name', '$email','$usia')";
    mysqli_query($conn, $sql);

    mysqli_close($conn);

    header("Location: index.php");
    exit();

}