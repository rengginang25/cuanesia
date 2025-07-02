<?php


require_once 'koneksi.php';


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


if (empty($username) || empty($email) || empty($password)) {
    die("Error: Semua kolom wajib diisi.");
}


$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($connection, $sql);


mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);


if (mysqli_stmt_execute($stmt)) {
    header("Location: registrasi_sukses.html");
    exit();
} else {
    if (mysqli_errno($connection) == 1062) {
        echo "Error: Username atau Email sudah terdaftar. Silakan gunakan yang lain.";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}

mysqli_stmt_close($stmt);
mysqli_close($connection);

?>