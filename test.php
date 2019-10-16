<html>
<head>
    <title>Sign Up Tuladha</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

 <div class="kotak" style="border:0">


    <form action="test.php" method="post" name="form1">
        <table width="50%" >

            <tr>
                <td>Nama</td>
                <td ><input width="100px" type="text" name="Nama" required></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="Username" required></td>
            </tr>
            <tr>
                <td>No.Telp</td>
                <td><input type="text" name="No_Telp" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="Email" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="Password" required></td>
            </tr>
            <tr>
                <td></td>
                <td ><input class="gila" type="submit" name="Submit" value="Masukkan"></td>
            </tr>
        </table>
        <center>
				<a class="link">Sudah punya akun ? masuk <a class="link" href="login.php"><b>disini</b></a></a>
		</center>
    </form>
 </div>

    <?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $Nama = $_POST['Nama'];
        $Username = $_POST['Username'];
        $No_Telp = $_POST['No_Telp'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        // include database connection file
        include_once("conn.php");
        // Insert user data into table
        $result = mysqli_query($conn, "INSERT INTO akun(Nama,Username,No_Telp,Email,Password) VALUES('$nama','$username','$email','$nomor','$password')");
        // Show message when user added
        echo "User added successfully.";
        header("location:login.php");}

    ?>
<a href='index.html'>Kembali</a>;
</body>
</html>
