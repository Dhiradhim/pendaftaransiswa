<?php
session_start();  
include('koneksi.php');

//ekstensi file
$allowed_file_types = array('.jpg','.jpeg','.gif','.png');
$nisn=$_SESSION['nisn'];

$akte_kelahiran = $_FILES["akte_kelahiran"]["name"];
$file_ext_kk = substr($akte_kelahiran, strripos($akte_kelahiran, '.'));

if (in_array($file_ext_kk,$allowed_file_types))
{
	//Upload file
	$akte_kelahiran = $nisn."_akte_kelahiran".$file_ext_kk;
	$db_akte_kelahiran= "images/berkas/" . $akte_kelahiran;
	move_uploaded_file($_FILES["akte_kelahiran"]["tmp_name"], "images/berkas/" . $akte_kelahiran);
	// Insert to DATABASE
	$query = "UPDATE upload_berkas SET akte_kelahiran='$db_akte_kelahiran' WHERE nisn='$nisn'";
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