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


echo "\n";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
print_r($result);
/*
 (
    [current_field] => 0
    [field_count] => 3
    [lengths] =>
    [num_rows] => 6
    [type] => 0
)
 */


echo "\n";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "id: {$row["id"]} - Name: {$row["name"]} - Email: {$row["email"]} \n";
}
/*
 id: 1 - Name: Antonio - Email: antonio@phpfullstack.com.br
id: 2 - Name: Thais - Email: thais@phpfullstack.com.br
id: 3 - Name: Anthony - Email: anthony@phpfullstack.com.br
id: 4 - Name: Mariah - Email: mariah@phpfullstack.com.br
id: 5 - Name: Esther - Email: esther@phpfullstack.com.br
id: 6 - Name: Vitória - Email: vitoria@phpfullstack.com.br
 */


echo "\n";
var_dump($result->fetch_assoc()); //fetch_assoc() is emptied after do while loop
/*
NULL
 */


echo "\n";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$users = $result->fetch_all();////fetch_all() isn't emptied after looping
foreach ($users as $user) {
    echo "id: {$user[0]} - Name: {$user[1]} - Email: {$user[2]} \n";
}
foreach ($users as $user) {
    echo "id: {$user[0]} - Name: {$user[1]} - Email: {$user[2]} \n";
}
/*
id: 1 - Name: Antonio - Email: antonio@phpfullstack.com.br
id: 2 - Name: Thais - Email: thais@phpfullstack.com.br
id: 3 - Name: Anthony - Email: anthony@phpfullstack.com.br
id: 4 - Name: Mariah - Email: mariah@phpfullstack.com.br
id: 5 - Name: Esther - Email: esther@phpfullstack.com.br
id: 6 - Name: Vitória - Email: vitoria@phpfullstack.com.br
id: 1 - Name: Antonio - Email: antonio@phpfullstack.com.br
id: 2 - Name: Thais - Email: thais@phpfullstack.com.br
id: 3 - Name: Anthony - Email: anthony@phpfullstack.com.br
id: 4 - Name: Mariah - Email: mariah@phpfullstack.com.br
id: 5 - Name: Esther - Email: esther@phpfullstack.com.br
id: 6 - Name: Vitória - Email: vitoria@phpfullstack.com.br
 */


echo "\n";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$users = $result->fetch_all(MYSQLI_NUM);//The array keys are numbers
foreach ($users as $user) {
    echo "id: {$user[0]} - Name: {$user[1]} - Email: {$user[2]} \n";
}
/*
id: 1 - Name: Antonio - Email: antonio@phpfullstack.com.br
id: 2 - Name: Thais - Email: thais@phpfullstack.com.br
id: 3 - Name: Anthony - Email: anthony@phpfullstack.com.br
id: 4 - Name: Mariah - Email: mariah@phpfullstack.com.br
id: 5 - Name: Esther - Email: esther@phpfullstack.com.br
id: 6 - Name: Vitória - Email: vitoria@phpfullstack.com.br
 */

echo "\n";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$users = $result->fetch_all(MYSQLI_BOTH);//The array keys are numbers and column names
foreach ($users as $user) {
    echo "id: {$user[0]} - Name: {$user[1]} - Email: {$user[2]} \n";
    echo "id: {$user["id"]} - Name: {$user["name"]} - Email: {$user["email"]} \n";
}
/*
id: 1 - Name: Antonio - Email: antonio@phpfullstack.com.br
id: 1 - Name: Antonio - Email: antonio@phpfullstack.com.br
id: 2 - Name: Thais - Email: thais@phpfullstack.com.br
id: 2 - Name: Thais - Email: thais@phpfullstack.com.br
id: 3 - Name: Anthony - Email: anthony@phpfullstack.com.br
id: 3 - Name: Anthony - Email: anthony@phpfullstack.com.br
id: 4 - Name: Mariah - Email: mariah@phpfullstack.com.br
id: 4 - Name: Mariah - Email: mariah@phpfullstack.com.br
id: 5 - Name: Esther - Email: esther@phpfullstack.com.br
id: 5 - Name: Esther - Email: esther@phpfullstack.com.br
id: 6 - Name: Vitória - Email: vitoria@phpfullstack.com.br
id: 6 - Name: Vitória - Email: vitoria@phpfullstack.com.br
 */


echo "\n";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$users = $result->fetch_all(MYSQLI_ASSOC);//In array the keys are numbers and column names
foreach ($users as $user) {
    echo "id: {$user["id"]} - Name: {$user["name"]} - Email: {$user["email"]} \n";
}
/*
id: 1 - Name: Antonio - Email: antonio@phpfullstack.com.br
id: 2 - Name: Thais - Email: thais@phpfullstack.com.br
id: 3 - Name: Anthony - Email: anthony@phpfullstack.com.br
id: 4 - Name: Mariah - Email: mariah@phpfullstack.com.br
id: 5 - Name: Esther - Email: esther@phpfullstack.com.br
id: 6 - Name: Vitória - Email: vitoria@phpfullstack.com.br
 */


$conn->close();