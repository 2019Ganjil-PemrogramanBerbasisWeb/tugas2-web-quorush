<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Test">

    <!-- Title Page-->
    <title>Registration</title>

    <!-- Icons font CSS-->
    <link href="vendor signup/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor signup/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor signup/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor signup/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css signup/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                      <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="post" action="signup-submit.php">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone" required>
                        </div>
                        <div class="p-t-10">
                            <input class="btn btn--pill btn--green" type="submit" name="Submit" value="Submit" action="signup-submit.php">
                        </div>
                          <a class="input--style-3" type="text">Already have an account? </a><a class="input--style-3" type="text" href="login.php"> Log In</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor signup/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor signup/select2/select2.min.js"></script>
    <script src="vendor signup/datepicker/moment.min.js"></script>
    <script src="vendor signup/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
