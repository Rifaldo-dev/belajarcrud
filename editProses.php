<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$usia = $_POST['usia'];

$sql ="UPDATE users SET  nama='$nama', email='$email', usia='$usia' WHERE id=$id";
mysqli_query($conn, $sql);
mysqli_close($conn);

header("Location: index.php");
exit();