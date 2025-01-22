<?php
$conn = require '12-connection.php';

$sql = "
INSERT INTO users (name, email, info) VALUES ('Antonio', 'antonio@phpfullstack.com.br', 'Tech enthusiast and music lover'),
                                             ('Thais', 'thais@phpfullstack.com.br', 'Creative thinker, problem solver'),
                                             ('Anthony', 'anthony@phpfullstack.com.br', 'Passionate about sustainability and innovation'),
                                             ('Mariah', 'mariah@phpfullstack.com.br', 'Avid reader and lifelong learner'),
                                             ('Esther', 'esther@phpfullstack.com.br', 'Fitness fanatic and foodie'),
                                             ('Vitória', 'vitoria@phpfullstack.com.br', 'Explorer, dreamer, passionate creator');
";

if (!$conn->multi_query($sql)) {
    echo "Error inserting records: {$conn->error}\n";
} else {
    echo "Records inserted successfully \n";

    // Consume all pending results to free the connection
    while ($conn->next_result()) {
        //// If there is a result, we can fetch it or simply ignore it
        if ($result = $conn->store_result()) {
            $result->free();
        }
    }
}

$query = "SELECT * FROM users";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
    echo "ID: {$row['id']} - Name: {$row['name']} - Email: {$row['email']} - Info: {$row['info']} \n";
}

$conn->close();