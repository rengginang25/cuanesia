<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'orangyangbergabung';

$connection = mysqli_connect($host, $user, $pass, $db);

if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}


$id      = $_POST['id'];
$user    = $_POST['user'];
$email   = $_POST['email'];
$message = $_POST['message'];


$sql = "UPDATE tertarik SET user='$user', email='$email', message='$message' WHERE id=$id";


if (mysqli_query($connection, $sql)) {

    header("Location: tampil_data.php");
    exit();
} else {

    echo "Error saat memperbarui data: " . mysqli_error($connection);
}


mysqli_close($connection);

?>