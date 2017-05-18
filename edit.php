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
            <right>
			<ul>
				<li><a href="input.php">Tambah Pendaftar</a></li>	
                <li><a href="index.php">Biodata Santri Baru</a></li>
			</ul>
                </right>
		</div>
		<div class="badan">			
			<div class="sidebar">
				
				
			</div>
			<div class="content">
                
                <h3>Ubah Data Santri</h3>
                    <br>
                <form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>
                 </div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			<center>Ma'had Mamba'ul Qur'an <br> RT 06 RW 11 <br> Munggang Bawah Kalibeber Wonosobo Jawa Tengah <br>CP : (0282)34456</center>
		</div>
	</div>
       
</body>
</html>
