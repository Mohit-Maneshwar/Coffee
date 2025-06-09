<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo "<BR>Invalid Database or path";
}

$sql = "CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
";



if (mysqli_query($conn, $sql)) {
    echo "Done";
}
mysqli_close($conn);
?>