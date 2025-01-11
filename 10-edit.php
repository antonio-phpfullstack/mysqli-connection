<?php
$conn = require '10-connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $id = $_POST["id"];

    if (isset($name) && isset($email) && isset($id)) {
        $stmt = $conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssi", $name, $email, $id);
        $stmt->execute();

        header("Location: 10-crud-editing-records.php");
        exit();
    }
}
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
    <title>CRUD</title>
</head>
<body>
<h1>Edit User - <?=$user["name"] ?></h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="hidden" name="id" value="<?=$user["id"]?>">
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?=$user["name"]?>">
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?=$user["email"]?>">
    </div>

    <div>
        <input type="submit" value="Send">
    </div>

</form>
<p><a href="javascript:history.back()"><< Back</a></p>
</body>
</html>