<?php
require 'connect.php';
session_start();
	if (isset($_SESSION["login"])) {

		if ($_SESSION["login"] = true) {
			
		}
	}

	if (!isset($_SESSION["login"])) {

		echo "<script>alert('Ilegal akses!');
		document.location.href='index.php';</script>";
		die;
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Thasadith&display=swap" rel="stylesheet" />
    <link href="profil.css" rel="stylesheet" />
    <title>Profil</title>
    
</head>
<body>
    <div class="container">
            <div class="nav">   
                <h1>E-Adbrary</h1>
                <ul>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="profil.php"><?php echo $_SESSION['nama'];?></a></li>
                <ul>
                <div class="tanggal1">
                    <div class="tanggal2">
                        <span id="hari">hari</span>,
                        <span id="nohari">07</span>
                        <span id="bulan">february</span>
                        <span id="tahun">2020</span>
                    </div>
                </div>
            </div>
            <div class="side">
                <div class="sidebar">
                    <header>Menu</header>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="databuku.php">Data Buku</a></li>
                        <li><a href="datadenda.php">Data Denda</a></li>
                        <li><a href="" class="aktif">Profil</a></li>
                    <ul>
                </div>
            </div>
            <div class="main">
                <div class="main-profil">
                    <div class="pilihan">
                        <span class="main-aktif"><a href=""> Profil</a></span>
                        <span><a href="editprofil.php">Edit Profil</a></span>
                    </div>
                    <div class="foto-user">
                        <img src="img/profil2.png">
                    </div>
                    <div class="main-profil-nama">
                        <h1><?php echo $_SESSION['nama'];?></h1>
                        <h1 class="nisn"><?php echo $_SESSION['NISN'];?></h1>
                    </div>
                </div>
            </div>
    </div>    
    <script type="text/javascript">
    window.onload = function() { tanggal(); }
   
    function tanggal() {
        var now = new Date();
        var dname = now.getDay(),
            mo  = now.getMonth(),
            dnum = now.getDate(),
            yr = now.getFullYear();
        
            var hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
            var bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
            var ids = ["hari", "nohari", "bulan", "tahun"];
            var values = [hari[dname], dnum, bulan[mo], yr];
            for(var i = 0; i <ids.length; i++)
            document.getElementById(ids[i]).firstChild.nodeValue = values[i];
        }
    </script>
</body>
</html>