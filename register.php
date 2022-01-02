<?php
session_start();  
include('koneksi.php');
$nisn=$_POST['nisn'];
$nama_lengkap=$_POST['nama_lengkap'];
$password=md5($_POST['password']);
$cpassword=md5($_POST['cpassword']);
$run=mysqli_query($con, "SELECT id FROM login WHERE nisn='$nisn'");  
$xrun = mysqli_fetch_assoc($run);
$query=mysqli_query($con, "SELECT status_ppdb FROM konfigurasi");  
$row = mysqli_fetch_assoc($query);
if($row['status_ppdb']==0)
{
	echo "<script type='text/javascript'>alert('PPDB masih ditutup');</script>";
	echo '<script>window.history.back()</script>';	
}
else if(mysqli_num_rows($run) > 0)  
{  
	echo "<script type='text/javascript'>alert('NISN sudah terdaftar.');</script>";
	echo '<script>window.history.back()</script>';	
}
else if ($password !== $cpassword)
{
	echo "<script type='text/javascript'>alert('Password Tidak Cocok');</script>";
	echo '<script>window.history.back()</script>';	
}else{
	$query = "INSERT into login (nisn,nama,password) values ('$nisn','$nama_lengkap','$password')";
	$update = mysqli_query($con, $query);
	echo "<script type='text/javascript'>alert('Anda sudah terdaftar, silahkan Login.');</script>";
	echo '<script>window.location.href="login.php"</script>';
}?>