<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jk = $_POST['jk'];

    $sql = "INSERT INTO mahasiswa (npm, nama, kelas, jk) VALUES ('$npm', '$nama', '$kelas', '$jk')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='message'>Registrasi berhasil!</div>";
    } else {
        echo "<div class='message error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f0f0f0; }
        form { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); }
        input, select, button { display: block; width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ddd; }
        button { background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #45a049; }
        .message { margin-top: 10px; color: #4CAF50; font-weight: bold; }
        .error { color: #FF0000; }
    </style>
</head>
<body>
    <form method="POST" action="signup.php">
        <h2>Daftar Akun Baru</h2>
        <input type="text" name="npm" placeholder="NPM" required>
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="text" name="kelas" placeholder="Kelas" required>
        <select name="jk" required>
            <option value="">Jenis Kelamin</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>
