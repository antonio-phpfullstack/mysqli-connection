<?php
$conn = require '11-connection.php';
$id = $_GET["id"] ?? NULL;

if (is_null($id)) {
    header("Location: 11-index.php");
    exit;
}

$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: 11-index.php");
exit;