<?php
include 'createProses.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data Peserta</title>
</head>
<body>
    <h1>Tambah data Peserta</h1>
    <form method="post">
        <label> Nama:</label>
        <input type="text" name="nama"> <br>
        <label>Email:</label>
        <input type="email" name="email"> <br>
        <label> Usia:</label>
        <input type="number" name="usia"> <br>
        <button type="submit" name="tambah">Tambah</button>
        <a href="index.php">Kembali</a>


    </form>
</body>
</html>