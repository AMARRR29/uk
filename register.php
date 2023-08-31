<?php
    session_start();
    require 'connect.php';
    if (isset($_POST["signup"])) {

        if (signup($_POST) > 0) {
            echo "<script>alert('Sign up berhasil! silahkan login');document.location='Login.php'</script>";
        } else {
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
    <link href="login.css" rel="stylesheet" />
</head>
<body>
    <div class ="kotak_signup">
    <p style="text-align:center; font-size: 24px; padding-top:15%;"><b>Sign Up</b></p>
		    <form action="" method="POST">
                <input type="text" name="namaLengkap" class= "form_login" placeholder="Nama Lengkap.." required="true"><br>
                <input type="text" name="NISN" class= "form_login" placeholder="NISN.." required="true"><br>
			    <input type="text" name="username" class= "form_login" placeholder="Username.." autocomplete="off" required="true" autofocus="on"><br>
			    <input type="password" name="password" class= "form_login" placeholder="Password.." required="true"><br>
			    <input type="submit" class="tombol_login" name="signup" value="SIGN UP"><br>
                </form>
                <p>Already have Account?</p>
		<a href="Login.php" class="tulisan_biru">Login here</a>
    </div>
</body>
</html>