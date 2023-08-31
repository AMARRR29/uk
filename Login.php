<?php
    session_start();
    if (isset($_SESSION["loginsiswa"])) {
    }

    require 'connect.php';

    if (isset($_POST["signin"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $cekuser = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        if (mysqli_num_rows($cekuser) === 1) {

            $result = mysqli_fetch_assoc($cekuser);
            if (password_verify($password, $result["password"])) {
                $_SESSION["user"] = $username;
                $_SESSION["loginsiswa"] = true;
            }
            echo"<script>
            alert('Anda berhasil login!');
            document.location='dashboard.php';
            </script>";
            }
            
        else {
            echo "<script>
            alert('Password salah!');
            document.location='Login.php';
            </script>";
            }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="login.css" rel="stylesheet" />
    <title>Login</title>
</head>
<body>
<div class="kotak_login">
    <img src="img/logo.png">
    <div class="kalimat_logo">
        <p>E-Adbrary</p>
        <p>Website of Library</p>
    </div>
	    <p class="tulisan_signin" style="text-align: left; padding-left: 65px; top: 240px;"><b>Sign in</b></p>
    <form action="" method="POST">
		<input type="text" name="username" class="form_login" placeholder="Username ..">
		<input type="password" name="password" class="form_login" placeholder="Password ..">
		<input type="submit" name="signin" class="tombol_login" value="SIGN IN">
    </form>
    <p>Create an account</p>
    <div class="tulisan_biru">
        <a href="register.php">Sign up<br>
        <a href="loginadmin.php">Login Admin<br>
    </div>
</div>
    <p class="join">Join Adbrary and get acces to library</p>
</body>
</html>