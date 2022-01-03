<?php
session_start();  
include('../koneksi.php');
$pengumuman=$_POST['pengumuman'];
$query = "UPDATE konfigurasi SET pengumuman='$pengumuman'";
$sql=mysqli_query($con, $query);
echo "<script type='text/javascript'>alert('Pengumuman berhasil diubah.');</script>";
echo '<script>window.location.href="konfigurasi.php"</script>';
?>