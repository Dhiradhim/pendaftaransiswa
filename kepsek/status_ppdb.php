<?php
session_start();  
include('../koneksi.php');
$status_ppdb=$_POST['status_ppdb'];
$query = "UPDATE konfigurasi SET status_ppdb='$status_ppdb'";
$sql=mysqli_query($con, $query);
echo "<script type='text/javascript'>alert('Status PPDB berhasil diubah.');</script>";
echo '<script>window.location.href="konfigurasi.php"</script>';
?>