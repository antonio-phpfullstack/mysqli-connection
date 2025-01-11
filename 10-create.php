<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = require '10-connection.php';

    $name = $_POST["name"] ?? NULL;
    $email = $_POST["email"] ?? NULL;

    if (isset($name) && isset($email)) {
        $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $email);
        $stmt->execute();
        header("Location: 10-crud-editing-records.php");
        exit;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
</head>
<body>
<h1>Add User</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
    </div>

    <div>
        <input type="submit" value="Send">
    </div>
</form>
<p><a href="javascript:history.back()"><< Back</a></p>
</body>
</html>