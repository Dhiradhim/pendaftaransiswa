<?php
session_start();  
include('koneksi.php');
$nisn=$_SESSION['nisn'];
$x=mysqli_query($con, "SELECT password FROM login WHERE nisn='$nisn'") or die(mysqli_connect_error());
$xx=mysqli_fetch_assoc($x);
$old=md5($_POST['old']);
$new=md5($_POST['new']);
$rep=md5($_POST['rep']);

if ($old !== $xx['password'])
{
	echo '<script type="text/javascript">alert("Password Lama Salah");</script>';
	echo '<script>window.history.back()</script>';	
}else if ($new !== $rep)
{
	echo '<script type="text/javascript">alert("Password Baru Tidak Cocok");</script>';
	echo '<script>window.history.back()</script>';	
}else{
	$query = "UPDATE login SET password='$new' WHERE nisn='$nisn'";
	$update = mysqli_query($con, $query);
	echo '<script type="text/javascript">alert("Password Berhasil Diganti. Silahkan LOGIN kembali");</script>';
	echo '<script>window.location.href="logout.php"</script>';
}?>