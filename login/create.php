<?php

include 'db.php';
 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO users (name, email, age) VALUES (:name, :email, :age)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'email' => $email, 'age' => $age]);

    $_SESSION['user_name'] = $name;

    header("Location: read.php");
    exit();
}

?>

<link rel="stylesheet" href="http://localhost/phpdocs/pemrograman-web-main/css/login.css">
<form action="" method="POST" class="styled-form">
    <h1>LOGIN</h1>
    <label>Name:</label><input type="text" name="name" required><br>
    <label>Email:</label><input type="email" name="email" required><br>
    <label>Age:</label><input type="number" name="age" required><br>
    <input type="submit" value="Login" class="submit-btn">
    <a href="read.php" class="button-link">List Users</a>
</form>
    
