<?php
session_start();  
include('koneksi.php');

//ekstensi file
$allowed_file_types = array('.jpg','.jpeg','.gif','.png');
$nisn=$_SESSION['nisn'];

$ijazah_belakang = $_FILES["ijazah_belakang"]["name"];
$file_ext_kk = substr($ijazah_belakang, strripos($ijazah_belakang, '.'));

if (in_array($file_ext_kk,$allowed_file_types))
{
	//Upload file
	$ijazah_belakang = $nisn."_ijazah_belakang".$file_ext_kk;
	$db_ijazah_belakang= "images/berkas/" . $ijazah_belakang;
	move_uploaded_file($_FILES["ijazah_belakang"]["tmp_name"], "images/berkas/" . $ijazah_belakang);
	// Insert to DATABASE
	$query = "UPDATE upload_berkas SET ijazah_belakang='$db_ijazah_belakang' WHERE nisn='$nisn'";
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