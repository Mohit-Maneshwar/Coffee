<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "coffee";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$sql = "SELECT id, name, description, price FROM coffeeDetails";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Coffee Menu</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: hsl(44deg 30.61% 9.61%);
      color: #fff;
      margin: 0;
      padding: 20px;
    }
    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }
    .card {
      background-color: #3b261a;
      padding: 20px;
      border-radius: 12px;
      width: 300px;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }
    .price { font-weight: bold; margin: 10px 0; }
    .book-btn {
      padding: 10px 20px;
      background: #28a745;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    /* Form Popup Styling */
    .form-popup {
      display: none;
      position: fixed;
      top: 50%; left: 50%;
      transform: translate(-50%, -50%);
      background: #fff;
      color: #000;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      z-index: 999;
    }

    .form-popup input {
      width: 100%;
      margin-bottom: 10px;
      padding: 8px;
      font-size: 16px;
    }

    .form-popup button {
      background-color: #28a745;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      margin-top: 10px;
    }

    .form-popup .close-btn {
      background-color: #dc3545;
    }

    .overlay {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(0,0,0,0.7);
      z-index: 998;
    }
  </style>
</head>
<body>

<h1 style="text-align:center;">☕ Our Coffee Varieties</h1>

<div class="container">
<?php
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $coffeeId = $row['id'];
    $coffeeName = htmlspecialchars($row['name']);
    echo "
    <div class='card'>
      <h3>$coffeeName</h3>
      <p>" . htmlspecialchars($row['description']) . "</p>
      <div class='price'>₹" . htmlspecialchars($row['price']) . "</div>
      <button class='book-btn' onclick=\"openForm('$coffeeId', '$coffeeName')\">Book</button>
    </div>";
  }
} else {
  echo "<p>No coffee found.</p>";
}
$conn->close();
?>
</div>

<!-- Overlay and Booking Form -->
<div class="overlay" id="overlay"></div>
<div class="form-popup" id="bookingForm">
  <form action="save-order.php" method="POST">
    <h3>Book Coffee</h3>
    <input type="hidden" name="coffee_id" id="coffee_id">
    <input type="hidden" name="coffee_name" id="coffee_name">
    <input type="text" name="customer_name" placeholder="Your Name" required>
    <input type="text" name="location" placeholder="Location" required>
    <input type="text" name="mobile" placeholder="Mobile Number" required>
    <input type="number" name="quantity" placeholder="Quantity" required>
    <button type="submit">Submit</button>
    <button type="button" class="close-btn" onclick="closeForm()">Cancel</button>
  </form>
</div>

<script>
function openForm(id, name) {
  document.getElementById("coffee_id").value = id;
  document.getElementById("coffee_name").value = name;
  document.getElementById("bookingForm").style.display = "block";
  document.getElementById("overlay").style.display = "block";
}

function closeForm() {
  document.getElementById("bookingForm").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}
</script>

</body>
</html>
