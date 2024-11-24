<?php

include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "UPDATE users SET name = :name, email = :email, age = :age WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'email' => $email, 'age' => $age, 'id' => $id]);

    header("Location: read.php");
    exit();

}

?>
<link rel="stylesheet" href="http://localhost/phpdocs/pemrograman-web-main/css/login.css">
<h1>Update User</h1>
<form action="" method="POST" class="styled-form">
    <label>Name:</label><input type="text" name="name" value="<?= $user['name'] ?>" required><br>
    <label>Email:</label><input type="email" name="email" value="<?= $user['email'] ?>" required><br>
    <label>Age:</label><input type="number" name="age" value="<?= $user['age'] ?>" required><br>
    <input type="submit" value="Update User" class="submit-btn">
</form>