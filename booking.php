<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parlour name - Book Appointment</title>
  <style>

    body {
      font-family: Arial, sans-serif;
      background-color :#FFE4E1;
      margin: 0;
      padding: 20px;
    }

    header {
            background-color: #DB7093; 
            color: #000000; 
            padding: 20px;
            text-align: center;
        }

    .parent {
  margin: 1rem;
  padding: 2rem 2rem;
  text-align: center;
}

.child {
  border: 1px solid black;
  display: inline-block;
  padding: 1rem 1rem;
  vertical-align: middle;
}

    h1 {
      text-align: center;
      font-size: 2em;
      margin-bottom: 30px;
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
      text-align: center;
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
      border-radius: 10px;
    }
    input[type="submit"] {
      padding: 10px;
      background-color:#DB7093;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #ff1493;
    }
    
  </style>
</head>
<body>
  <header>
  <h1>Book an Appointment</h1>
  </header>

  <div class="parent">
        <div class="child">
            <img src="OIP.jpg" width="500" height="350">
  </div>
  <div class="child">

  <form method="post" action="booking_appointment.php">
    <label for="customer">Customer:</label>
    <select name="customer" required>
      <option value="">Select Customer</option>
      <?php
        // Database connection & query to retrieve customers
        $servername = "localhost";
        $username = "root";
        $password = "information@14";
        $dbname = "parlour";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT customer_id, name FROM Customers";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["customer_id"] . "'>" . $row["name"] . "</option>";
          }
        }
        $conn->close();
      ?>
    </select><br>

    <label for="service">Service:</label>
    <select name="service" required>
      <option value="">Select Service</option>
      <?php
        // Database connection & query to retrieve services
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT service_id, service_name FROM Services";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["service_id"] . "'>" . $row["service_name"] . "</option>";
          }
        }
        $conn->close();
      ?>
    </select><br>

    <label for="date">Date:</label>
    <input type="date" name="date" required><br>

    <label for="time">Time:</label>
    <input type="time" name="time" required><br>

    <input type="submit" value="Book Appointment">
  </form>
      </div>
      </div>
</body>
</html>
