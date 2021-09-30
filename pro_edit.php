<?php 
include 'koneksi.php';
$id=$_POST['id'];
$nama=$_POST['nama_pengunjung'];
$alamat=$_POST['alamat_pengunjung'];
$wisata=$_POST['nm_tmptwisata'];
$saran=$_POST['saran'];

$s=mysqli_query($koneksi, "UPDATE  wisata SET nama_pengunjung='$nama',alamat_pengunjung='$alamat',nm_tmptwisata='$wisata',saran='$saran', where id='$id'");{
	?>
	 <script type="text/javascript">
 	alert("Data Berhasil Disimpan");
 	window.location.href='pengunjung.php';
 </script>
 <?php
}


 ?>