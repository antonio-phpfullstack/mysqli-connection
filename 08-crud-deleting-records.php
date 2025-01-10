<?php
$conn = require '08-connection.php';
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
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user):?>
        <tr>
            <td><?=$user["id"]?></td>
            <td><?=$user["name"]?></td>
            <td><?=$user["email"]?></td>
            <td><a href="08-show.php?id=<?=$user["id"]?>">Show</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>
</body>
</html>