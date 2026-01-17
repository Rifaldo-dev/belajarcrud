<?php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die ("Query gagal di proses: " . mysqli_error($conn));
}

    while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['nama']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['usia']}</td>";
            echo "<td><a href='edit.php?id={$row['id']}'>Edit</a> | <a href='delete.php?id={$row['id']}'>Hapus</a></td>";
            echo "</tr>";
        }

        ?>