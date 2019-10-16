<?php
  // Check If form submitted, insert form data into users table.
  if(isset($_POST['Submit'])){
      $fullname = $_POST['fullname'];
      $Name = $_POST['username'];
      $password = $_POST['password'];

      // include database connection file
      include_once("conn.php");
      // Insert user data into table
      $result = mysqli_query($conn, "INSERT INTO users(fullname, username,password) VALUES('$fullname','$Name','$password')");
      // Show message when user added
      echo "User added successfully.";
      header("location:login.php");}

  ?>
