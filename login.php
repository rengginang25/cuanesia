<?php session_start(); ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cuanesia</title>
    <style>
        .notif-box {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 8px;
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb;
        }
        body {
            font-family: 'Raleway', sans-serif;
            background-color: #121212;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #1e1e1e;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h1 {
            color: #ddb942;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }
        input {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            background-color: #333;
            border: 1px solid #555;
            border-radius: 5px;
            color: #ffffff;
        }
        .main-btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 99px;
            background-color: #109c19;
            color: #ffffff;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .main-btn:hover {
            background-color: #14c522;
        }
        .register-link {
            margin-top: 20px;
        }
        .register-link a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_SESSION['pesan_error'])) {
        echo '<div class="notif-box">' . $_SESSION['pesan_error'] . '</div>';
        unset($_SESSION['pesan_error']);
    }
    ?>
    <div class="login-container">
    <div class="login-container">
        <h1>Login</h1>
        <form action="proses_login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="main-btn">Login</button>
        </form>
        <div class="register-link">
            <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
        </div>
    </div>
</body>
</html>