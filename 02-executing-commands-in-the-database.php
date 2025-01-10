<?php
$servername = "db"; // Service name defined in docker-compose.yml
$username = "noreply@phpfullstack.com.br";
$password = "admin";
$database = "esqueleto_webserver_apache_php";

// Create the connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}
echo "Connection successful! \n";

$sql = "CREATE TABLE IF NOT EXISTS `users` ( id INT NOT NULL AUTO_INCREMENT, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY (id))";
if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully \n";
} else {
    echo "Error creating table: {$conn->error}\n";
}

$sqlInsert = "INSERT INTO users (name, email) VALUES ('Thais', 'thais@phpfullstack.com.br')";
if ($result = $conn->query($sqlInsert)) {
    echo "New record created successfully\n";
} else {
    echo "Error: $sqlInsert {$conn->error}\n";
}

$conn->close();