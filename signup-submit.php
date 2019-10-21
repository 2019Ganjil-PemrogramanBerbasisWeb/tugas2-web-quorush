
        <?php
          // Check If form submitted, insert form data into users table.
          if(isset($_POST['Submit'])){
              $name = $_POST['name'];
              $password = $_POST['password'];
              $email = $_POST['email'];
              $phone = $_POST['phone'];

              // include database connection file
              include 'connect.php';
              // Insert user data into table
              $result = mysqli_query($link, "INSERT INTO datas(name,password,email,phone) VALUES('$name','$password','$email','$phone')");
              // Show message when user added
              echo "User added successfully.";
              header("location:login.php");}

          ?>

    <!-- Jquery JS-->
