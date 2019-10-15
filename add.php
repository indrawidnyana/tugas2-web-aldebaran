<html>
<head>
    <title>tu.skul-registrasi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

 <div class="kotak_add" style="border:0">

    <a href="homepage.php"><img class="logo" src="logo/tu.png" ></a>

    <form action="add.php" method="post" name="form1">
        <table width="75%" >
           
            <tr> 
                <td>Nama</td>
                <td ><input width="75px" type="text" name="Nama" required></td>
            </tr>
            <tr> 
                <td>Nama Pengguna</td>
                <td><input type="text" name="Nama_Pengguna" required></td>
            </tr>
            <tr> 
                <td>No.HP</td>
                <td><input type="text" name="No_hp" required></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="Email" required></td>
            </tr>
            <tr> 
                <td>Kata Sandi</td>
                <td><input type="text" name="password" required></td>
            </tr>
            <tr> 
                <td></td>
                <td ><input class="picik" type="submit" name="Submit" value="Add"></td>
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
        $nama = $_POST['Nama'];
        $username = $_POST['Nama_Pengguna'];
        $nomor = $_POST['No_hp'];
        $email = $_POST['Email'];
        $password = $_POST['password'];

        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO akun(Nama,Nama_Pengguna,No_hp,email,password) VALUES('$nama','$username','$email','$nomor','$password')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
        header("location:login.php");}
         
    ?>

</body>
</html>