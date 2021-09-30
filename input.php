
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Admin</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<nav>
	<ul class="kiri">
		<li><a href=""></a></li>
	</ul>
	<ul class="kanan">
		<li><a href="">Hello</a></li>
		<div style="clear:both"></div>
	</ul>
</nav>
<div class="backend">
		<ul>
			<li><a href="home.php">Dashboard</a></li>
			<li><a href="pengunjung.php">Data Pengunjung</a></li>
		</ul>
	</div>
<div class="main">
	<div class="isimain">
		<span class="span">Form Input Saran Pengunjung</span>
			<form action="pro_tambah.php" method="POST">
				<input type="text" name="nama_pengunjung" placeholder="Masukan Nama Anda"><br>
				<input type="text" name="alamat_pengunjung" placeholder="Masukkan Alamat Anda"><br>
				<select name='nm_tmptwisata'>
							<option>--Pilih Tempat Wisata--</option>
							<option>Watu Rumpuk</option>
							<option>Waduk Widas</option>
							<option>Pinus Nongko Ijo</option>
						</select><br>
				<input type="text" name="saran" placeholder="Masukkan Saran Anda"><br>
				<input type="submit" value="Simpan Data">
			</form>
	</div>
</div>
</body>
</html>
