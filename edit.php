<?php 
include 'koneksi.php';
 ?>
 <html>
<head>
<title>Home | admin</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav>
<ul class="kiri">
<li><a href="">ADMIN</a></li>
</ul>
<ul class="kanan">
</ul><div style="clear:both"></div>
</nav>
<div class="backend">
<ul>
<li><a href="home.php">Home</a></li>
<li><a href="">Wisata</a></li>
<li><a href="pengunjung.php">Data Pengunjung</a></li>
<li><a href="">Admin</a></li>

</ul>
</div>
<div class="main">
	<div class="isimain">
			<span class="span">Form Input Ubah Data Pengunjung</span>
			<?php 
				$id=$_GET['id'];
				$data= mysqli_query($koneksi, "SELECT * from wisata WHERE id='$id'");
				while ($r=mysqli_fetch_array($data)) {
					?>
					<form action="pro_edit.php" method="POST">
						<input type="hidden" name="id" value="<?php echo $r['id']; ?>"><br>
						<input type="text" name="nama_pengunjung" value="<?php echo $r['nama_pengunjung']; ?>"><br>
						<input type="text" name="alamat_pengunjung" value="<?php echo $r['alamat_pengunjung']; ?>"><br>
						<select name='nm_tmptwisata'>
							<option>--Pilih Tempat Wisata--</option>
							<option value="watu"<?php if($r=="watu"){ echo "selected=\"selected\""; } ?>>Watu Rumpuk</option>
							<option value="widas"<?php if($r=="widas"){ echo "selected=\"selected\""; } ?>>Waduk Widas</option>
							<option value="pinus"<?php if($r=="pinus"){ echo "selected=\"selected\""; } ?>>Pinus Nongko Ijo</option>
						</select><br>
						<input type="text" name="saran" value="<?php echo $r['saran']; ?>"><br>
						<input type='submit'>
					</form>

					<?php
				}
			 ?>
			
	</div>
</div>
</body>
</html>
