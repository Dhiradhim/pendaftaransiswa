<?php
session_start();  
include('../koneksi.php');
$nisn=$_POST['nisn'];
$query = "UPDATE upload_berkas SET status_berkas='2' WHERE nisn='$nisn'";
$sql=mysqli_query($con, $query);
echo "<script type='text/javascript'>alert('Berhasil validasi.');</script>";
echo '<script>window.location.href="validasiberkasdetail.php?nisn='.$nisn.'"</script>';
?>