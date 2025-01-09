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
echo "Connection successful!";
$conn->close();