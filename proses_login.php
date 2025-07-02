<?php

session_start();


require_once 'koneksi.php';


$username = $_POST['username'];
$password = $_POST['password'];


if (empty($username) || empty($password)) {
    die("Error: Username dan password wajib diisi.");
}


$sql = "SELECT id, username, password FROM users WHERE username = ?";
$stmt = mysqli_prepare($connection, $sql);


mysqli_stmt_bind_param($stmt, "s", $username);


mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);


if (mysqli_num_rows($result) == 1) {

    $user_data = mysqli_fetch_assoc($result);

    if (password_verify($password, $user_data['password'])) {
        

        $_SESSION['user_id'] = $user_data['id'];
        $_SESSION['username'] = $user_data['username'];
        

        header("Location: Classes/index.php");
        exit();
        
    } else {

        echo "Login gagal. Username atau password salah.";
    }
} else {

    echo "Login gagal. Username atau password salah.";
}


mysqli_stmt_close($stmt);
mysqli_close($connection);

?>