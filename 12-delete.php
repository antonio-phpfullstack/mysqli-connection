<?php
$conn = require '12-connection.php';
$id = $_GET["id"] ?? NULL;

if (is_null($id)) {
    header("Location: 12-index.php");
    exit;
}

$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: 12-index.php");
exit;