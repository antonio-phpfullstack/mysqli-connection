<?php
$conn = require '12-connection.php';

$sql = "drop table users";

if (!$conn->query($sql)) {
    echo "Error destroying table: {$conn->error}\n";
} else {
    echo "Table users destroyed successfully \n";
}

$conn->close();