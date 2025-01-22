<?php
$conn = require '12-connection.php';

$sql = "CREATE TABLE users (
    id INT AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    info TEXT NOT NULL,
    PRIMARY KEY (id)
)";

if (!$conn->query($sql)) {
    echo "Error creating table: {$conn->error}\n";
    $conn->close();
    die();
}

echo "Table users created successfully \n";

// Executes the DESCRIBE command to display the table structure
$query = "DESCRIBE users";
$result = $conn->query($query);

if ($result) {
    echo "Table structure:\n";
    while ($row = $result->fetch_assoc()) {
        echo "Field: {$row['Field']} - Type: {$row['Type']} - Null: {$row['Null']} - Key: {$row['Key']} - Default: {$row['Default']} - Extra: {$row['Extra']}\n";
    }
} else {
    echo "Error describing table: {$conn->error}\n";
}

$conn->close();