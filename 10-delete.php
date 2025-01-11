<?php
$conn = require '10-connection.php';
$id = $_GET["id"] ?? NULL;

if (is_null($id)) {
    header("Location: 10-crud-editing-records.php");
    exit;
}

$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: 10-crud-editing-records.php");
exit;