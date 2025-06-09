<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "coffee";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Get form data
$coffee_id = $_POST['coffee_id'];
$coffee_name = $_POST['coffee_name'];
$customer_name = $_POST['customer_name'];
$location = $_POST['location'];
$mobile = $_POST['mobile'];
$quantity = $_POST['quantity'];

// Get current date
$order_date = date("Y-m-d");

// Insert into coffeeOrders with date
$sql = "INSERT INTO coffeeOrders (coffee_id, coffee_name, customer_name, location, mobile, quantity, order_date)
        VALUES ('$coffee_id', '$coffee_name', '$customer_name', '$location', '$mobile', '$quantity', '$order_date')";

if ($conn->query($sql) === TRUE) {
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";      
    echo "<meta charset='UTF-8'>";      
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Order Confirmation</title>";
    echo "<style>";
    echo "body { font-family: 'Poppins', sans-serif; background-color: hsl(44deg 30.61% 9.61%); color: #fff; margin: 0; padding: 20px; }";

    echo ".container { display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; }";
    echo ".message { text-align: center; }";


    echo ".message h2 { color: green; }";
    echo ".message a { color: green; text-decoration: none; }";
    echo ".message a:hover { text-decoration: underline; }";    
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<div class='container'>";

    echo"<div style='text-align:center;position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);'>";
    echo "<h2>✅ Order Placed Successfully!</h2>";
    echo "<a href='shop.php' style='color:green;text-align:center;'>Back to Menu</a></div>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
