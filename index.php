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
			</ul>
		</div>
		<div class="badan">			
			<div class="sidebar">
               <br><img src="logo.png" height=190" width="190">
				
				
			</div>
			<div class="content">
    <center>
                <h3>Biodata Santri Baru </h3>

<table border="1"> 
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Usia</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['alamat']; ?></td>
		<td><?php echo $x['usia']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
    
	<?php 
    }
	?>
</table>

               
        Lihat Brosur<a href="brosur.JPG" > di sini</a>  
        </center>
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			<center>Ma'had Mamba'ul Qur'an <br> RT 06 RW 11 <br> Munggang Bawah Kalibeber Wonosobo Jawa Tengah <br>CP : (0282)34456</center>
		</div>
	</div>
        
</body>
</html>