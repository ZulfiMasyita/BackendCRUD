<?php 
include 'koneksi.php';
 ?>
<?php 
$id =$_GET['id'];
$db=mysqli_query($koneksi, "DELETE FROM wisata WHERE id='$id'");
{?> 
<script type="text/javascript">
	alert("Anda Yakin ??");
	window.location.href="pengunjung.php";
</script>

<?php } ?>
