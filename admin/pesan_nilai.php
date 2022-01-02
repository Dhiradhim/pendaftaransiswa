<?php
session_start();  
include('../koneksi.php');
$pesan_nilai=$_POST['pesan_nilai'];
$nisn=$_POST['nisn'];
$query = "UPDATE upload_nilai SET pesan_nilai='$pesan_nilai' WHERE nisn='$nisn'";
$sql=mysqli_query($con, $query);
echo "<script type='text/javascript'>alert('Pesan berhasil dikirim.');</script>";
echo '<script>window.location.href="seleksinilaidetail.php?nisn='.$nisn.'"</script>';
?>