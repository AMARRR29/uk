<?php 
require 'config.php';

function signup($data){
	global $conn;

    $username = mysqli_real_escape_string($conn, $data["username"]);
    $NISN = $data["NISN"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $namaLengkap = mysqli_real_escape_string($conn, $data["namaLengkap"]);
    $result = mysqli_query($conn, "SELECT NISN FROM user WHERE NISN = '$NISN'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('NISN sudah terdaftar!')</script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = mysqli_query($conn, "INSERT INTO user (id, NISN, username, password, namaLengkap) VALUES(' ', '$NISN', '$username', '$password', '$namaLengkap')");
    
    return mysqli_affected_rows($conn);
}

?>