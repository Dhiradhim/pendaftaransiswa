<?php
session_start();  
include('koneksi.php');
$nisn=$_POST['nisn'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$alamat_lengkap=$_POST['alamat_lengkap'];
$no_hp=$_POST['no_hp'];
$nama_sekolah=$_POST['nama_sekolah'];
$alamat_sekolah=$_POST['alamat_sekolah'];
$nama_ayah=$_POST['nama_ayah'];
$pendidikan_ayah=$_POST['pendidikan_ayah'];
$pekerjaan_ayah=$_POST['pekerjaan_ayah'];
$nama_ibu=$_POST['nama_ibu'];
$pendidikan_ibu=$_POST['pendidikan_ibu'];
$pekerjaan_ibu=$_POST['pekerjaan_ibu'];
$jurusan=$_POST['jurusan'];
// $tahun_ajaran=$_POST[''];

$filename = $_FILES["foto"]["name"];
$file_ext = substr($filename, strripos($filename, '.'));
$allowed_file_types = array('.jpg','.jpeg','.gif','.png');

if (in_array($file_ext,$allowed_file_types))
	{	
		//Upload file foto
		$foto = $nisn."_foto".$file_ext;
		$db_foto= "images/foto/" . $foto;
		move_uploaded_file($_FILES["foto"]["tmp_name"], "images/foto/" . $foto);
		// Insert to DATABASE
		$query = "INSERT into biodata (nisn,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat_lengkap,no_hp,nama_sekolah,alamat_sekolah,nama_ayah,pendidikan_ayah,pekerjaan_ayah,nama_ibu,pendidikan_ibu,pekerjaan_ibu,jurusan,foto) values ('$nisn','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat_lengkap','$no_hp','$nama_sekolah','$alamat_sekolah','$nama_ayah','$pendidikan_ayah','$pekerjaan_ayah','$nama_ibu','$pendidikan_ibu','$pekerjaan_ibu','$jurusan','$db_foto')";
		$sql=mysqli_query($con, $query);
		echo "<script type='text/javascript'>alert('Data berhasil disimpan.');</script>";
		echo '<script>window.location.href="isibiodata.php"</script>';
		}
else
	{
		// file type error
		$error="Format foto yang diizinkan hanya: " . implode(', ',$allowed_file_types);
		echo "<script type='text/javascript'>alert('$error');</script>";
		unlink($_FILES["foto"]["tmp_name"]);
		echo '<script>window.history.back()</script>';	
	}
?>