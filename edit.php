<?php
include "koneksi.php";

$id = $_GET['id'];

// Ambil data berdasarkan ID
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peserta</title>
</head>
<body>
    
<form action="./editProses.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label > Nama:</label>
   <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>
       <label >Email:</label> 
         <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
         <label >Usia:</label>
         <input type="number" name="usia" value="<?php echo $row['usia']; ?>" required><br>

        <button type="submit" name="update">Update</button>
        <a href="index.php">Kembali</a>


</form>
</body>
</html>