<?php 
	session_start();
    
	?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>Data Buku</title>
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
</head>
<body>
    <div class="nav">
        <h1><a href="dashboard.php">E-Adbrary</a></h1>   
        <ul>
            <li><a href="logout.php">Logout</a></li>
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
    <div class="sub-main">
        <h2>Dashboard</h2>
        <div class="sub-sub-main">
            <span>
                <h1>Data Buku</h1>
                <a href="databuku.php"><img src="img/data-buku.png"></a>
            </span>
            <span>
                <h1>Data Denda</h1>
                <a href="datadenda.php"><img src="img/denda.jpg"></a>
            </span>
            <span>
                <h1>Tambah Buku</h1>
                <a href="tambahbuku.php"><img src="img/tambah-buku.png"></a>
            </span>
        </div>
    </div>
</body>
</html>
