<?php
include_once("config.php");

$kode_buku = $_GET['kode_buku'];

$stmt = mysqli_prepare($conn, "DELETE FROM databuku WHERE kode_buku = ?");
mysqli_stmt_bind_param($stmt, "s", $kode_buku);

if (mysqli_stmt_execute($stmt)) {
    header("Location: hapusbuku.php");
    exit();
} else {
    echo "Error deleting book: " . mysqli_error($conn); // Menampilkan pesan error dari database
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
