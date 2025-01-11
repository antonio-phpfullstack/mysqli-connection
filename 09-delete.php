<?php
$conn = require '09-connection.php';
$id = $_GET["id"] ?? NULL;

if (is_null($id)) {
    header("Location: 09-crud-deleting-records.php");
    exit;
}

$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: 09-crud-inserting-data.php");
exit;