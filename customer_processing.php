<?php
// Database connection details 
$servername = "localhost";
$username = "root";
$password = "information@14";
$dbname = "parlour";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Processing form data (if submitted)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate and sanitize inputs (important!)
  $cname = $conn->real_escape_string($_POST["name"]);
  $phonenumber = $conn->real_escape_string($_POST["phone_number"]);
  $cemail = $conn->real_escape_string($_POST["email"]);


  // Prepare SQL query to insert appointment
  $sql = "INSERT INTO customers (name, phone_number, email) 
          VALUES ('$cname', '$phonenumber', '$cemail')";

  if ($conn->query($sql) === TRUE) {
    // Customer added successfully! Redirect to confirmation page (optional)
    header("Location: index.php");
  } else {
    echo "Error booking appointment: " . $conn->error;
  }
}

// Close connection (important)
$conn->close();

?>
