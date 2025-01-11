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
    <title>Add User</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?>" method="post">
    <input type="text" name="name" value="<?=$user["name"]?>">
    <input type="email" name="email" value="<?=$user["email"]?>">
    <input type="submit" value="send-user">
</form>
<p><a href="javascript:history.back()"><< Back</a></p>
</body>
</html>