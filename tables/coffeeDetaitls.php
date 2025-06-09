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

$sql = "CREATE TABLE coffeeDetails (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    description varchar(255),
    price INT
)";



if (mysqli_query($conn, $sql)) {
    echo "Done";
}
mysqli_close($conn);
?>