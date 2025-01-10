<?php

$servername = "db"; // Service name defined in docker-compose.yml
$username = "noreply@phpfullstack.com.br";
$password = "admin";
$database = "esqueleto_webserver_apache_php";

// Create the connection
$conn = new mysqli($servername, $username, $password, $database);

$input = (int)(date('s') / 10) + 1;
$input .= " OR 1=1";

$id = $input;
$sql = "SELECT * FROM users WHERE id > $id";
echo "{$sql}\n";
$result = $conn->query($sql);
$users = $result->fetch_all(MYSQLI_ASSOC);//In array the keys are numbers and column names
foreach ($users as $user) {
    echo "id: {$user["id"]} - Name: {$user["name"]} - Email: {$user["email"]} \n";
}


$conn->close();