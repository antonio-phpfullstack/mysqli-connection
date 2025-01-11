<?php
$conn = require '11-connection.php';

$sql = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)";

if (!$conn->query($sql)) {
    echo "Error creating table: {$conn->error}\n";
} else {
    echo "Table users created successfully \n";
}

$conn->close();