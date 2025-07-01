<?php

$connection = mysqli_connect('localhost', 'root', '', 'orangyangbergabung');

if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `tertarik`(`user`, `email`, `message`) VALUES ('$user', '$email', '$message')";

if (mysqli_query($connection, $query)) {
    echo "Link Discord akan segera dikirim ke Gmail Anda";
} else {
    echo "Wah error, pasti adminnya ngantuk: " . mysqli_error($connection);
}

mysqli_close($connection);

?>