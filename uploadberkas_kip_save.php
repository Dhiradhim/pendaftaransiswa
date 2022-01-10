<?php
session_start();  
include('koneksi.php');

//ekstensi file
$allowed_file_types = array('.jpg','.jpeg','.gif','.png');
$nisn=$_SESSION['nisn'];

$kip = $_FILES["kip"]["name"];
$file_ext_kk = substr($kip, strripos($kip, '.'));

if (in_array($file_ext_kk,$allowed_file_types))
{
	//Upload file
	$kip = $nisn."_kip".$file_ext_kk;
	$db_kip= "images/berkas/" . $kip;
	move_uploaded_file($_FILES["kip"]["tmp_name"], "images/berkas/" . $kip);
	// Insert to DATABASE
	$query = "UPDATE upload_berkas SET kip='$db_kip' WHERE nisn='$nisn'";
	$sql=mysqli_query($con, $query);
	echo "<script type='text/javascript'>alert('Data berhasil disimpan.');</script>";
	echo '<script>window.location.href="uploadberkas.php"</script>';
}
else
{
	// file type error
	$error="Format yang diizinkan hanya: " . implode(', ',$allowed_file_types);
	echo "<script type='text/javascript'>alert('$error');</script>";
	echo '<script>window.history.back()</script>';		
}
					
?>