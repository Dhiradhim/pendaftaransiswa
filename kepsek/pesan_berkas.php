<?php
session_start();  
include('../koneksi.php');
$pesan_berkas=$_POST['pesan_berkas'];
$nisn=$_POST['nisn'];
$query = "UPDATE upload_berkas SET pesan_berkas='$pesan_berkas' WHERE nisn='$nisn'";
$sql=mysqli_query($con, $query);
echo "<script type='text/javascript'>alert('Pesan berhasil dikirim.');</script>";
echo '<script>window.location.href="validasiberkasdetail.php?nisn='.$nisn.'"</script>';
?>