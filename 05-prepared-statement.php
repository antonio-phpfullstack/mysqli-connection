<?php

$servername = "db"; // Service name defined in docker-compose.yml
$username = "noreply@phpfullstack.com.br";
$password = "admin";
$database = "esqueleto_webserver_apache_php";

// Create the connection
$conn = new mysqli($servername, $username, $password, $database);

$input1 = (int)(date('s') / 10) + 1;
$input1 .= " OR 1=1";

$input2 = mt_rand(1,6);

$id1 = $input1;
$id2 = $input2;
$sql = "SELECT * FROM users WHERE id > ? OR id = ?";

$stmt = $conn->prepare($sql);
/*
i-> integer
d-> double
s-> string
b-> blob
 */
$stmt->bind_param("ii", $id1, $id2);
$stmt->execute();

$result = $stmt->get_result();
$users = $result->fetch_all(MYSQLI_ASSOC);//In array the keys are numbers and column names
echo "SELECT * FROM users WHERE id > {$id1} OR id = {$id2} \n";
foreach ($users as $user) {
    echo "id: {$user["id"]} - Name: {$user["name"]} - Email: {$user["email"]} \n";
}
/*
SELECT * FROM users WHERE id > 4 OR 1=1 OR id = 3
id: 3 - Name: Anthony - Email: anthony@phpfullstack.com.br
 */

$stmt->close();
$conn->close();