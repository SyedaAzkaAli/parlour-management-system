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


$appointmentsQuery = "SELECT a.appointment_id, c.name AS customer_name, s.service_name, a.date, a.time FROM Appointments a 
JOIN Customers c ON a.customer_id = c.customer_id 
JOIN Services s ON a.service_id = s.service_id
ORDER BY a.appointment_id DESC LIMIT 10";

$servicesQuery = "SELECT service_name, price FROM services LIMIT 4";

$appointmentsResult = $conn->query($appointmentsQuery);
$servicesResult = $conn->query($servicesQuery);

// Close connection 
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parlor Name-home</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color : #fed3d3;
      margin: 0;
      padding: 20px;
    }

    header {
            background-color: #DB7093; /* coffee brown */
            color: #000000; /* light plum*/
            padding: 20px;
            text-align: center;
        }

    h1 {
      text-align: center;
      font-size: 2em;
      margin-bottom: 20px;
    }

    p {
      text-align: center;
      margin-bottom: 20px;
    }

    h2 {
      margin-top: 20px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 20px;
    }

    th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    li {
      margin-bottom: 10px;
    }

    a {
      color: #007bff;
      text-decoration: none;
      padding: 5px 10px;
      border: 1px solid #007bff;
      border-radius: 5px;
    }

    a:hover {
      background-color: #007bff;
      color: #fff;
    }
  </style>
</head>
<body>
  <header>
  <h1>Welcome to Chic Canvas Studios</h1>
  <p> Where we love to exceed your expectations </p>
  </header>

  <h2>Recent Appointments</h2>
  <?php
  if ($appointmentsResult->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Appointment ID</th><th>Customer Name</th><th>Service</th><th>Date</th><th>Time</th></tr>";
    while($row = $appointmentsResult->fetch_assoc()) {
      echo "<tr><td>" . $row["appointment_id"] . "</td><td>" . $row["customer_name"] . "</td><td>" . $row["service_name"] . "</td><td>" . $row["date"] . "</td><td>" . $row["time"] . "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "No recent appointments found.";
  }
  ?>

  <h2>Featured Services</h2>
  <?php
  if ($servicesResult->num_rows > 0) {
    echo "<ul>";
    while($row = $servicesResult->fetch_assoc()) {
      echo "<li>" . $row["service_name"] . " - $" . $row["price"] . "</li>";
    }
    echo "</ul>";
  } else {
    echo "No services found.";
  }
  ?>

  <p>
    <a href="booking.php">Book an Appointment</a> or 
    <a href="customer.php">Become a New Customer</a>
  </p>
</body>
</html>

