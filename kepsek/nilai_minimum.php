<?php
session_start();  
include('../koneksi.php');
$nilai_minimum=$_POST['nilai_minimum'];
$query = "UPDATE konfigurasi SET nilai_minimum='$nilai_minimum'";
$sql=mysqli_query($con, $query);
echo "<script type='text/javascript'>alert('Nilai Minimum berhasil diubah.');</script>";
echo '<script>window.location.href="konfigurasi.php"</script>';
?>