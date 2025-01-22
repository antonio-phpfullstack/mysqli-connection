<?php
$conn = require '12-connection.php';
$result = $conn->query("SELECT * FROM users");
$users = $result->fetch_all(MYSQLI_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
</head>
<body>
<h1>List Users</h1>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Information</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user):?>
        <tr>
            <td><?=$user["id"]?></td>
            <td><?=$user["name"]?></td>
            <td><?=$user["email"]?></td>
            <td><?=$user["info"]?></td>
            <td><a href="12-show.php?id=<?=$user["id"]?>">Show</a></td>
            <td><a href="12-edit.php?id=<?=$user["id"]?>">Edit</a></td>
            <td><a href="12-delete.php?id=<?=$user["id"]?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<p><a href="12-create.php">--> Add User <--</a></p>
</body>
</html>