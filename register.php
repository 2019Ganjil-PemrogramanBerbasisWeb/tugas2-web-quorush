<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="register.php" method="post">
          <div class="form-group">
              <label>Fullname</label>
              <input type="text" name="fullname" class="form-control" >
              <span class="help-block"></span>
          </div>
            <div class="form-group ">
                <label>Username</label>
                <input type="text" name="username" class="form-control" >
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"></span>
            </div>

            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Sudah memiliki akun? <a href="login.php">Login disini</a>.</p>
        </form>
    </div>

    <?php
      // Check If form submitted, insert form data into users table.
      if(isset($_POST['Submit'])){
          $fullname = $_POST['fullname'];
          $Name = $_POST['username'];
          $password = $_POST['password'];

          // include database connection file
          include 'conn.php';
          // Insert user data into table
          $result = mysqli_query($link, "INSERT INTO users(fullname,username,password) VALUES('$fullname','$Name','$password')");
          // Show message when user added
          echo "User added successfully.";
          header("location:login.php");}

      ?>


</body>

</html>
