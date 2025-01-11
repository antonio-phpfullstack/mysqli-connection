<?php
$conn = require '09-connection.php';
$id = $_GET["id"];
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User - <?=$user["name"] ?></title>
</head>
<body>
<p><strong>Name:</strong> <?=$user["name"] ?></p>
<p><strong>Email:</strong> <?=$user["email"] ?></p>
<p><a href="09-edit.php?id=<?=$user["id"] ?>">--> Edit <--</a></p>
<p><a href="09-delete.php?id=<?=$user["id"] ?>">--> Delete <--</a></p>
<p><a href="javascript:history.back()"><< Back</a></p>
</body>
</html>
