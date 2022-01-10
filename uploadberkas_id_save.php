<?php
session_start();  
include('koneksi.php');

//ekstensi file
$allowed_file_types = array('.jpg','.jpeg','.gif','.png');
$nisn=$_SESSION['nisn'];

$ijazah_depan = $_FILES["ijazah_depan"]["name"];
$file_ext_kk = substr($ijazah_depan, strripos($ijazah_depan, '.'));

if (in_array($file_ext_kk,$allowed_file_types))
{
	//Upload file
	$ijazah_depan = $nisn."_ijazah_depan".$file_ext_kk;
	$db_ijazah_depan= "images/berkas/" . $ijazah_depan;
	move_uploaded_file($_FILES["ijazah_depan"]["tmp_name"], "images/berkas/" . $ijazah_depan);
	// Insert to DATABASE
	$query = "UPDATE upload_berkas SET ijazah_depan='$db_ijazah_depan' WHERE nisn='$nisn'";
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