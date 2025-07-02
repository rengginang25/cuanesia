<?php


$host = 'localhost';
$user = 'root'; 
$pass = '';    
$db   = 'orangyangbergabung'; 


$connection = mysqli_connect($host, $user, $pass, $db);

if (!$connection) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

?>