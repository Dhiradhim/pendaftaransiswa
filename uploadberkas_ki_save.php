<?php
session_start();  
include('koneksi.php');

//ekstensi file
$allowed_file_types = array('.jpg','.jpeg','.gif','.png');
$nisn=$_SESSION['nisn'];

$ktp_ibu = $_FILES["ktp_ibu"]["name"];
$file_ext_kk = substr($ktp_ibu, strripos($ktp_ibu, '.'));

if (in_array($file_ext_kk,$allowed_file_types))
{
	//Upload file
	$ktp_ibu = $nisn."_ktp_ibu".$file_ext_kk;
	$db_ktp_ibu= "images/berkas/" . $ktp_ibu;
	move_uploaded_file($_FILES["ktp_ibu"]["tmp_name"], "images/berkas/" . $ktp_ibu);
	// Insert to DATABASE
	$query = "UPDATE upload_berkas SET ktp_ibu='$db_ktp_ibu' WHERE nisn='$nisn'";
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