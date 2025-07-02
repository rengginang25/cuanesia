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

$sql = "SELECT * FROM tertarik WHERE id = $id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .container {
            width: 50%;
            margin: auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-group textarea {
            height: 120px;
            resize: vertical;
        }
        .btn-submit {
            display: block;
            width: 100%;
            padding: 10px 15px;
            border: none;
            background-color: #27ae60;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-submit:hover {
            background-color: #229954;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Edit Data Pengguna</h1>

        <form action="update_proses.php" method="post">
            
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
            <div class="form-group">
                <label for="user">Nama:</label>
                <input type="text" id="user" name="user" value="<?php echo $row['user']; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" required><?php echo $row['message']; ?></textarea>
            </div>
            
            <button type="submit" class="btn-submit">Simpan Perubahan</button>
        </form>

    </div>

</body>
</html>

<?php
mysqli_close($connection);
?>