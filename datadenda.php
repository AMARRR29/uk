<?php 
    require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Thasadith&display=swap" rel="stylesheet" />
    <link href="datadenda.css" rel="stylesheet" />
    <title>Data Denda</title>
    
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
                        <li><a href="databuku.php">Data Buku</a></li>
                        <li><a href="" class="aktif">Data Denda</a></li>
                    <ul>
                </div>
            </div> 
            <div class="main">
                <div class="sub-main">
                    <h1>Data Denda</h1>
                    <form action="" method="get">
	                    <label style="position: absolute; top: 445px; left: 375px;">Cari :</label>
	                        <input type="text" name="cari" style="position: absolute; top: 455px; left: 475px; width: 150px; height:45px; font-size: 40px; border-radius: 10px; border: 2px solid black;">
                            <input type="submit" value="Cari" name="search" style="position: absolute; top: 455px; left: 635px; width: 50px; height:50px; padding:5px; cursor: pointer; border-radius: 10px; border: 2px solid black; font-size: 28px;">
                    </form>
                    <?php
					$query = mysqli_query($conn, "SELECT * FROM datadenda");
					$i=1;
					?>
                    <table class="tabel-dabu">
                        <tr>
                            <th>Tanggal</th>
                            <th>Kode Buku</th>
                            <th>Waktu Peminjaman</th>
                            <th>Pengembalian</th>
                            <th>Denda</th>
                            <th>Pembayaran</th>
                        </tr>
                        <?php
							if(mysqli_num_rows($query) > 0 ){
								while($row = mysqli_fetch_assoc($query)){
									echo '<tr>
											<td>'.$row['tanggal'].'</td>
											<td>'.$row['kode_buku'].'</td>
											<td>'.$row['waktu_pinjam'].'</td>
											<td>'.$row['pengembalian'].'</td>
                                            <td>'.$row['denda'].'</td>
                                            <td>'.$row['pembayaran'].'</td>
										</tr>';
									$i++;
								}
							}else{
								echo "0 results";
							}
						?>
                    </table>
                    <?php
                    
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