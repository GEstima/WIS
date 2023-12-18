<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentinfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE users(
    id INT NOT NULL,
    username varchar(255),
    email varchar(255),
    PRIMARY KEY (id)
)";
$result = $conn->query($sql);

// Insert data
$username = "JohnDoe";
$email = "john@example.com";

$sql = "INSERT INTO users(username, email) VALUES ('$username', '$email')";
$result = $conn->query($sql);

// if ($conn->query($sql) === TRUE) {
//     echo "Record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// Close connection
$conn->close();

?>      


