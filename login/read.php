<link rel="stylesheet" href="http://localhost/phpdocs/pemrograman-web-main/css/login.css">

<?php

include 'db.php';

$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>User List</h1>
<table border="1">
    <a href="create.php" class="btn">Add New User</a>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['name'] ?></td>
        <td><?= $user['email'] ?></td>
        <td><?= $user['age'] ?></td>
        <td>
            <a href="update.php?id=<?= $user['id'] ?>" class="btn">Edit</a>
            <a href="delete.php?id=<?= $user['id'] ?>" onclick="return confirm('Are you sure?')" class="btn">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
    <a href="http://localhost/phpdocs/pemrograman-web-main/index.php" class="btn">Back to home</a>
</table>