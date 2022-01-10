<?php
session_start();  
include('koneksi.php');

//ekstensi file
$allowed_file_types = array('.jpg','.jpeg','.gif','.png');
$nisn=$_SESSION['nisn'];

$ktp_ayah = $_FILES["ktp_ayah"]["name"];
$file_ext_kk = substr($ktp_ayah, strripos($ktp_ayah, '.'));

if (in_array($file_ext_kk,$allowed_file_types))
{
	//Upload file
	$ktp_ayah = $nisn."_ktp_ayah".$file_ext_kk;
	$db_ktp_ayah= "images/berkas/" . $ktp_ayah;
	move_uploaded_file($_FILES["ktp_ayah"]["tmp_name"], "images/berkas/" . $ktp_ayah);
	// Insert to DATABASE
	$query = "UPDATE upload_berkas SET ktp_ayah='$db_ktp_ayah' WHERE nisn='$nisn'";
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