<?php 
    require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Thasadith&display=swap" rel="stylesheet" />
    <link href="databuku.css" rel="stylesheet" />
    <title>Data Buku</title>
    
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
                    <h1>Hapus Buku</h1>
                    <?php
				   $query = mysqli_query($conn, "SELECT * FROM databuku");
                   $i=1;
					?>
                    <table class="tabel-dabu">
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>No Hp</th>
                            <th>Kode Buku</th>
                            <th>Waktu Peminjaman</th>
                            <th>Ubah</th>
                        </tr>
                        <?php
							if(mysqli_num_rows($query) > 0 ){
								while($row = mysqli_fetch_assoc($query)){
									echo '<tr>
											<td>'.$row['tanggal'].'</td>
											<td>'.$row['nama'].'</td>
											<td>'.$row['no_hp'].'</td>
											<td>'.$row['kode_buku'].'</td>
                                            <td>'.$row['waktu_peminjaman'].'</td>
                                            <td><a href="delete.php?kode_buku='.$row['kode_buku'].'">Delete</a></td>
										</tr>';
									$i++;
								}
							}else{
								echo "0 results";
							}
						?>
                    </table>
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