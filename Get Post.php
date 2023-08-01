<!DOCTYPE html>
<html>
  <head>
    <title>Name and Age Form</title>
	    <style> body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
      }
      h1 {
        text-align: center;
        margin-top: 50px;
      }
      form {
        max-width: 500px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0px 0px 10px #ccc;
        border-radius: 5px;
      }
      label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
      }
      input[type="text"],
      input[type="number"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;

			
	  </style>
	 
  </head>
  <body>
    <h1>Name and Age Form</h1>
    <?php
   
      $servername = "localhost";
      $username = "username";
      $password = "password";
      $dbname = "info";

     
      $conn = new mysqli($servername, $username, $password, $dbname);
 
      $sql = "INSERT INTO users (name, age) VALUES ('$name', '$age')";
       
      $sql = "SELECT * FROM users";
      $result = $conn->query($sql);
    ?>

    <h1>Name and Age Form</h1>
    <form method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">

      <label for="age">Age:</label>
      <input type="number" id="age" name="age">

      <input type="submit" value="Submit">
    </form>

    <?php

     
      if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Age</th></tr>";
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td></tr>";
        }
        echo "</table>";
     
      $conn->close();
    ?>
  </body>
</html>