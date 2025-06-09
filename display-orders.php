<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "coffee";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$sql = "SELECT * FROM coffeeOrders ORDER BY order_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Coffee Orders</title>
    <style>
        body {
            background: #1e1e1e;
            font-family: 'Segoe UI', sans-serif;
            color: #fff;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #f2c94c;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .order-card {
            background: linear-gradient(135deg, #3a2c2c, #1e1e1e);
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.4);
            padding: 20px;
            width: 300px;
            transition: transform 0.3s ease;
        }

        .order-card:hover {
            transform: translateY(-10px);
        }

        .order-card h3 {
            color: #f2c94c;
            margin-bottom: 10px;
        }

        .order-card p {
            margin: 5px 0;
            color: #ddd;
        }

        .order-date {
            margin-top: 15px;
            font-size: 14px;
            color: #aaa;
            border-top: 1px solid #444;
            padding-top: 10px;
        }
    </style>
</head>
<body>

<h1>📦 All Coffee Orders</h1>

<div class="container">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='order-card'>";
            echo "<h3>Order ID #" . htmlspecialchars($row['id']) . "</h3>";
            echo "<p><strong>Coffee:</strong> " . htmlspecialchars($row['coffee_name']) . "</p>";
            echo "<p><strong>Customer:</strong> " . htmlspecialchars($row['customer_name']) . "</p>";
            echo "<p><strong>Location:</strong> " . htmlspecialchars($row['location']) . "</p>";
            echo "<p><strong>Mobile:</strong> " . htmlspecialchars($row['mobile']) . "</p>";
            echo "<p><strong>Quantity:</strong> " . htmlspecialchars($row['quantity']) . "</p>";
            echo "<div class='order-date'><strong>Date:</strong> " . htmlspecialchars($row['order_date']) . "</div>";
            echo "</div>";
        }
    } else {
        echo "<p>No orders found.</p>";
    }
    $conn->close();
    ?>
</div>

</body>
</html>
