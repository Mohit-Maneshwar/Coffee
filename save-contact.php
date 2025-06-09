<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "coffee"; // Change if your DB is named differently

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Get form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password']; // Consider hashing for security

// Insert query
$sql = "INSERT INTO contacts (first_name, last_name, email, password) 
        VALUES ('$first_name', '$last_name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "<!DOCTYPE html>"; 
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Contact Saved</title>";
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
    echo "<div class='message'>";
    echo "<h2>✅ Thank you! Your contact has been saved.</h2>";
    echo "<a href='index.php'>Go Back</a>";
    echo "</div>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
