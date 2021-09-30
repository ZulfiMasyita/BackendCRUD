<?php 
	include 'koneksi.php';
 ?>
<?php 
$nama=$_POST['nama_pengunjung'];
$alamat=$_POST['alamat_pengunjung'];
$wisata=$_POST['nm_tmptwisata'];
$saran=$_POST['saran'];

$s=mysqli_query($koneksi, "INSERT INTO wisata VALUES('','$nama','$alamat','$wisata','$saran')");{
	?>
	<script>
		alert("Data Pengunjung Berhasil Disimpan");
		window.location.href='pengunjung.php';

	</script>
	<?php 
}

 ?>