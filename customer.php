<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parlour Name - New Customer</title>
  <style>

body {
  font-family: Arial, sans-serif;
  background-color :#FFE4E1 ;
  margin: 0;
  padding: 20px;
}

header {
            background-color:#DB7093 ; 
            color: #000000; 
            padding: 20px;
            text-align: center;
        }

h1 {
  text-align: center;
  font-size: 2em;
  margin-bottom: 30px;
}

section {
   display: flex;
   flex-wrap: wrap;
  justify-content: space-around;
  padding: 10px;
        }

        .box {
 background-color: #f2d9d7; /* light pink */
   border: 2px solid #4a2c2a; /* coffee brown */
    border-radius: 10px;
    margin: 10px;
    padding: 15px;
    text-align: center;
    width: 25%;
        }
      
 <div class="box">Box 1</div>
 <div class="box">Box 2</div>
 <div class="box">Box 3</div>

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
  <h1>Add New Customer</h1>
  </header>

<section>
        <div class="box">
            <img src="th.jfif" width="250" height="250">
           
        </div>

        <div class="box">
            <img src="prl.jfif" width="250" height="250">
        </div>

        <div class="box">
            <img src="R.jfif" width="250" height="250">
        </div>
</section>


  <form method="post" action="customer_processing.php">
    <label for="customer">Customer Name:</label>
    <input type="text" name="name" required>
    <br>

    <label for="phone_number">Phone Number:</label>
    <input type="tel" name="phone_number" required>
    
    <br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>


    <input type="submit" value="Add Customer">
  </form>
</body>
</html>
