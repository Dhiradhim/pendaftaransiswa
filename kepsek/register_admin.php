<?php
session_start();  
include('../koneksi.php');
$nisn=$_POST['nisn'];
$password=md5($_POST['password']);
$cpassword=md5($_POST['cpassword']);

$run=mysqli_query($con, "select id from login WHERE nisn='$nisn'");  
$xrun = mysqli_fetch_assoc($run);
if(mysqli_num_rows($run) > 0)  
{  
	echo "<script type='text/javascript'>alert('NISN sudah terdaftar.');</script>";
	echo '<script>window.history.back()</script>';	
}
else if ($password !== $cpassword)
{
	echo "<script type='text/javascript'>alert('Password Tidak Cocok');</script>";
	echo '<script>window.history.back()</script>';	
}else{
	$query = "INSERT into login (nisn,nama,password,hak_akses) values ('$nisn','Administrator','$password','admin')";
	$update = mysqli_query($con, $query);
	echo "<script type='text/javascript'>alert('Administrator baru sudah terdaftar, silahkan Login.');</script>";
	echo '<script>window.location.href="konfigurasi.php"</script>';
}?>