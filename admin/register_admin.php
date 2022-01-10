<?php
session_start();  
include('../koneksi.php');
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$hak_akses=$_POST['hak_akses'];
$password=md5($_POST['password']);
$cpassword=md5($_POST['password']);

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
	$query = "INSERT into login (nisn,nama,password,hak_akses) values ('$nisn','$nama','$password','$hak_akses')";
	$update = mysqli_query($con, $query);
	echo "<script type='text/javascript'>alert('User baru sudah terdaftar, silahkan Login.');</script>";
	echo '<script>window.location.href="konfigurasi.php"</script>';
}?>