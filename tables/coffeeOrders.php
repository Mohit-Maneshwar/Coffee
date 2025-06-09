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

$sql = "CREATE TABLE coffeeOrders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    coffee_id INT,
    coffee_name VARCHAR(50),
    customer_name VARCHAR(50),
    location VARCHAR(100),
    mobile VARCHAR(15),
    quantity INT,
    order_date DATE
);";


if (mysqli_query($conn, $sql)) {
    echo "Done";
}
mysqli_close($conn);
?>