
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "coffee";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$desc = $_POST['description'];
$price = $_POST['price'];

$sql = "INSERT INTO coffeeDetails (name, description, price) VALUES ('$name', '$desc', $price)";

if ($conn->query($sql) === TRUE) {
  include "enterCoffeeDetails.html";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>

