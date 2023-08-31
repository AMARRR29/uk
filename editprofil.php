<?php
require 'connect.php';
session_start();
$NISN = $_SESSION['NISN'];
$query = "SELECT * FROM user WHERE NISN='$NISN'";

$hasil = mysqli_query($conn, $query);
foreach($hasil as $value)
    $NISN = $value['NISN'];
    $nama = $value['namaLengkap'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Thasadith&display=swap" rel="stylesheet" />
    <link href="editprofil.css" rel="stylesheet" />
    <title>Edit Profil</title>
</head>
<body>
<div class="container">
        <div class="nav">   
            <h1>E-Adbrary</h1>
            <ul>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="profil.php"><?php echo "$nama";?></a></li>
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
            <div class="edit">
                <div class="main-profil1">
                    <div class="foto-user">
                        <img src="img/profil2.png">
                    </div>
                    <div class="main-profil-nama">
                        <h1><?php echo $_SESSION['nama'];?></h1>
                    </div>
                </div>
                <div class="main-profil2">
                    <div class="pilihan">
                        <span><a href="profil.php"> Profil</a></span>
                        <span class="main-aktif"><a href="">Edit Profil</a></span>
                    </div>
                    <div class="form" action="">
                        <form method="POST">
                        <p>
                            <label>Nama Lengkap</label>
                        </p>
                        <input type="text" class="edit-nama" name="namaLengkap" value="<?php echo "$nama";?>" placeholder="" />
                        <p>
                            <label>NISN</label>
                        </p>
                        <input type="text" class="edit-nisn" name="NISN" value="<?php echo "$NISN";?>" placeholder="" />
                        <div class="sub-btn">
                            <button type="submit" class="btn-edit" name="edit">Confirm</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php     	
    if(isset($_POST['edit'])){
        $id_update = $_POST['NISN'];
        $nama_update = $_POST['namaLengkap'];
        $query = "UPDATE user SET NISN = '$id_update', namaLengkap = '$nama_update' where id ='{$_SESSION['id']}'";
        $update = mysqli_query($conn, $query);
        if($update){
            ?>
            <script type="text/javascript">alert('Data berhasil diupdate!');</script>
            <?php
        }
      }
    ?>
        
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