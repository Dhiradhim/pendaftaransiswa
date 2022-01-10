<?php
session_start();  
include('koneksi.php');

//ekstensi file
$allowed_file_types = array('.jpg','.jpeg','.gif','.png');
$nisn=$_SESSION['nisn'];

$kartu_keluarga = $_FILES["kartu_keluarga"]["name"];
$file_ext_kk = substr($kartu_keluarga, strripos($kartu_keluarga, '.'));

if (in_array($file_ext_kk,$allowed_file_types))
{
	//Upload file
	$kartu_keluarga = $nisn."_kartu_keluarga".$file_ext_kk;
	$db_kartu_keluarga= "images/berkas/" . $kartu_keluarga;
	move_uploaded_file($_FILES["kartu_keluarga"]["tmp_name"], "images/berkas/" . $kartu_keluarga);
	// Insert to DATABASE
	$query = "UPDATE upload_berkas SET kartu_keluarga='$db_kartu_keluarga' WHERE nisn='$nisn'";
	// echo $query;
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