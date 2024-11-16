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
  $customerId = $conn->real_escape_string($_POST["customer"]);
  $serviceId = $conn->real_escape_string($_POST["service"]);
  $date = $conn->real_escape_string($_POST["date"]);
  $time = $conn->real_escape_string($_POST["time"]);

  // Prepare SQL query to insert appointment
  $sql = "INSERT INTO Appointments (customer_id, service_id, date, time) 
          VALUES ('$customerId', '$serviceId', '$date', '$time')";

  if ($conn->query($sql) === TRUE) {
    // Account created successfully! Redirect to index page
    header("Location: index.php");
  } else {
    echo "Error booking appointment: " . $conn->error;
  }
}

// Close connection (important)
$conn->close();

?>
