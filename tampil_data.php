<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'orangyangbergabung';

$connection = mysqli_connect($host, $user, $pass, $db);


if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tertarik";
$result = mysqli_query($connection, $sql);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna Tertarik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        .container {
            width: 80%;
            margin: auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e8f4fd;
        }
        .aksi a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
            margin-right: 5px;
        }
        .btn-edit {
            background-color: #f39c12;
        }
        .btn-hapus {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Daftar Pengguna yang Tertarik</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["user"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["message"] . "</td>";
                        echo "<td class='aksi'>";
                        echo "<a href='edit_form.php?id=" . $row["id"] . "' class='btn-edit'>Edit</a>";
                        echo "<a href='hapus_data.php?id=" . $row["id"] . "' class='btn-hapus' onclick=\"return confirm('Anda yakin ingin menghapus data ini?');\">Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data ditemukan</td></tr>";
                }
                ?>
            </tbody>
        </table>

    </div>

</body>
</html>

<?php

mysqli_close($connection);
?>