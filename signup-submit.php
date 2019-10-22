<?php
          // Check If form submitted, insert form data into users table.
          if(isset($_POST['Submit'])){
              $name = $_POST['name'];
              $password =md5( $_POST['password']);
              $email = $_POST['email'];
              $phone = $_POST['phone'];

              // include database connection file
              include 'connect.php';
              // Insert user data into table
              $result = "INSERT INTO datas(name,password,email,phone) VALUES ('$name','$password','$email','$phone')";
              if ($conn->query($result) == TRUE) {
                echo "Pendaftaran berhasil";
              } else {
                echo "Gagal";
              }
              header("location:../tugas2-web-quorush/");
            }
          ?>
