<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'orangyangbergabung';

$connection = mysqli_connect($host, $user, $pass, $db);


if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$id = $_GET['id'];

$sql = "DELETE FROM tertarik WHERE id = $id";

if (mysqli_query($connection, $sql)) {
    header("Location: tampil_data.php");
    exit();
} else {
    echo "Error saat menghapus data: " . mysqli_error($connection);
}

mysqli_close($connection);

?>