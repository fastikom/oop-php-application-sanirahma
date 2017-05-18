<?php 
include 'koneksi.php';
$db = new database();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
	<div class="wrap">
		<div class="header">			
            <center><h1>DAFTAR SANTRI BARU MA'HAD MAMBA'UL QUR'AN 2017</h1></center>
		</div>
		<div class="menu">
			<ul>
				<li><a href="input.php">Tambah Pendaftar	</a></li>	
                <li><a href="index.php">Biodata Santri Baru</a></li>
			</ul>
		</div>
		<div class="badan">			
			<div class="sidebar">
				
			</div>
			<div class="content">
                
                <h3>Masukkan Data Pendaftar</h3>
                    <br>
                <form action="proses.php?aksi=tambah" method="post">
	
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>
                
                 </div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			<center>Ma'had Mamba'ul Qur'an <br> RT 06 RW 11 <br> Munggang Bawah Kalibeber Wonosobo Jawa Tengah <br>CP : (0282)34456</center>
	</div>
       
</body>
</html>

