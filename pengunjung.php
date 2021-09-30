<?php 
require 'koneksi.php';
 ?>
<html>
<head>
<title>Home | admin</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav>
<ul class="kiri">
<li><a href="">Selamat Datang Pengunjung</a></li>
</ul>
<ul class="kanan">
</ul><div style="clear:both"></div>
</nav>
<div class="backend">
<ul>
<li><a href="home.php">Home</a></li>
<li><a href="">Wisata</a></li>
<li><a href="pengunjung.php">Data Pengunjung</a></li>
</ul>
</div>
<style type="text/css">
td,th{border:1px solid #ccc;padding:10px}
table{border-collapse:collapse;}
</style>
<div class="main">
	<div class="isimain">
		<table>
			<a href="input.php"><input type="submit" value="Tambah Saran"></a>
			<tr>
				<th>No</th><th>Nama Pengunjung</th><th>Alamat Pengunjung</th><th>Tempat Wisata</th><th>Saran</th><th>Action</th>
			</tr>
			<?php 
				$query="SELECT * FROM wisata ORDER BY nama_pengunjung";
				$data=mysqli_query($koneksi, $query);
				$no=1;
				while ($d=mysqli_fetch_array($data)) {
					?>
					 <tr>
			 	<td><?php echo $no++ ?></td>
			 	<td><?php echo $d['nama_pengunjung']; ?></td>
			 	<td><?php echo $d['alamat_pengunjung']; ?></td>
			 	<td><?php echo $d['nm_tmptwisata']; ?></td>
			 	<td><?php echo $d['saran']; ?></td>
			 	<td>
					 <button><a href="edit.php?id=<?php echo $d['id'];?>">Edit</a></button>
					 <button><a href="hapus.php?id=<?php echo $d['id'];?>">Hapus</a></button>
				</td>
			 </tr>
			 <?php
				}
			 ?>
		</table>	
	</div>
</div>
</body>
</html>