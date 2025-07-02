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
    header("Location: terima_kasih.html");
    exit();
} 
else {

}

mysqli_close($connection);

?>