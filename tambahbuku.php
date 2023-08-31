<?php 
    require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Thasadith&display=swap" rel="stylesheet" />
    <link href="tambahbuku.css" rel="stylesheet" />
    <title>Tambah Buku</title>
    
</head>
<body>
    <div class="container">
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
            <div class="side">
                <div class="sidebar">
                    <header>Menu</header>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="" class="aktif">Data Buku</a></li>
                        <li><a href="datadenda.php">Data Denda</a></li>
                    <ul>
                </div>
            </div> 
            <div class="main">        
                <div class="sub-main">
                    <h1>Tambah Buku</h1>
                    <form action="tambahbuku.php" method="post" name="form1">
                        <table width="25%">
                            <tr> 
                            <td>Tanggal Dipinjam</td>
                            <td><input class = "field" type="date" name="tanggal"></td>
                                </tr>
                                <tr> 
                            <td>Nama Peminjam</td>
                            <td><input class = "field" type="text" name="nama"></td>
                                </tr>
                                 <tr> 
                            <td>No Handphone</td>
                            <td><input class = "field" type="text" name="no_hp"></td>
                                </tr>
                                <tr> 
                            <td>Kode Buku</td>
                            <td><input class = "field" type="text" name="kode_buku"></td>
                                </tr>
                                <tr> 
                            <td>Waktu Peminjaman</td>
                            <td><input class = "field" type="date" name="waktu_peminjaman"></td>
                                </tr>
                                <tr> 
                            <td></td>
                            <td><input type="submit" name="Submit" value="Submit" class="tambah-buku"></td>
                                </tr>
                        </table>
                    </form>
                    <?php 
                        if(isset($_POST['Submit'])) {
                            $tanggal = $_POST['tanggal'];
                            $nama = $_POST['nama'];
                            $no_hp = $_POST['no_hp'];
                            $kode_buku = $_POST['kode_buku'];
                            $waktu_peminjaman = $_POST['waktu_peminjaman'];
                                    

                            $result = mysqli_query($conn, "INSERT INTO databuku(tanggal,nama,no_hp,kode_buku,waktu_peminjaman) VALUES('$tanggal','$nama','$no_hp','$kode_buku','$waktu_peminjaman')");
                            
                            // Show message when user added
                            if($result){
                                echo "<script>alert('Data berhasil ditambahkan!');
                                document.location='databuku.php';</script>";
                            }else{
                                echo "<script>alert('Gagal ditambahkan!');</script>";
                            }
                        }
                        ?>
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