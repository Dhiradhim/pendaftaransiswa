<?php
session_start();  
include('koneksi.php');

//ekstensi file
$allowed_file_types = array('.jpg','.jpeg','.gif','.png');
$nisn=$_SESSION['nisn'];
$kartu_keluarga = $_FILES["kartu_keluarga"]["name"];
$file_ext_kk = substr($kartu_keluarga, strripos($kartu_keluarga, '.'));
$akte_kelahiran = $_FILES["akte_kelahiran"]["name"];
$file_ext_ak = substr($akte_kelahiran, strripos($akte_kelahiran, '.'));
$ktp_ayah = $_FILES["ktp_ayah"]["name"];
$file_ext_ka = substr($ktp_ayah, strripos($ktp_ayah, '.'));
$ktp_ibu = $_FILES["ktp_ibu"]["name"];
$file_ext_ki = substr($ktp_ibu, strripos($ktp_ibu, '.'));
$kip = $_FILES["kip"]["name"];
$file_ext_kip = substr($kip, strripos($kip, '.'));
$ijazah_depan = $_FILES["ijazah_depan"]["name"];
$file_ext_id = substr($ijazah_depan, strripos($ijazah_depan, '.'));
$ijazah_belakang = $_FILES["ijazah_belakang"]["name"];
$file_ext_ib = substr($ijazah_belakang, strripos($ijazah_belakang, '.'));


if (in_array($file_ext_kk,$allowed_file_types))
{
	if (in_array($file_ext_ak,$allowed_file_types))
	{
		if (in_array($file_ext_ka,$allowed_file_types))
		{
			if (in_array($file_ext_ki,$allowed_file_types))
			{
				if (in_array($file_ext_kip,$allowed_file_types))
				{
					if (in_array($file_ext_id,$allowed_file_types))
					{
						if (in_array($file_ext_ib,$allowed_file_types))
						{
							//Upload file
							$kartu_keluarga = $nisn."_kartu_keluarga".$file_ext_kk;
							$db_kartu_keluarga= "images/berkas/" . $kartu_keluarga;
							move_uploaded_file($_FILES["kartu_keluarga"]["tmp_name"], "images/berkas/" . $kartu_keluarga);
							$akte_kelahiran = $nisn."_akte_kelahiran".$file_ext_ak;
							$db_akte_kelahiran= "images/berkas/" . $akte_kelahiran;
							move_uploaded_file($_FILES["akte_kelahiran"]["tmp_name"], "images/berkas/" . $akte_kelahiran);
							$ktp_ayah = $nisn."_ktp_ayah".$file_ext_ka;
							$db_ktp_ayah= "images/berkas/" . $ktp_ayah;
							move_uploaded_file($_FILES["ktp_ayah"]["tmp_name"], "images/berkas/" . $ktp_ayah);
							$ktp_ibu = $nisn."_ktp_ibu".$file_ext_ki;
							$db_ktp_ibu= "images/berkas/" . $ktp_ibu;
							move_uploaded_file($_FILES["ktp_ibu"]["tmp_name"], "images/berkas/" . $ktp_ibu);
							$kip = $nisn."_kip".$file_ext_kip;
							$db_kip= "images/berkas/" . $kip;
							move_uploaded_file($_FILES["kip"]["tmp_name"], "images/berkas/" . $kip);
							$ijazah_depan = $nisn."_ijazah_depan".$file_ext_id;
							$db_ijazah_depan= "images/berkas/" . $ijazah_depan;
							move_uploaded_file($_FILES["ijazah_depan"]["tmp_name"], "images/berkas/" . $ijazah_depan);
							$ijazah_belakang = $nisn."_ijazah_belakang".$file_ext_ib;
							$db_ijazah_belakang= "images/berkas/" . $ijazah_belakang;
							move_uploaded_file($_FILES["ijazah_belakang"]["tmp_name"], "images/berkas/" . $ijazah_belakang);
							// Insert to DATABASE
							$query = "INSERT into upload_berkas (nisn,kartu_keluarga,akte_kelahiran,ktp_ayah,ktp_ibu,kip,ijazah_depan,ijazah_belakang) values ('$nisn','$db_kartu_keluarga','$db_akte_kelahiran','$db_ktp_ayah','$db_ktp_ibu','$db_kip','$db_ijazah_depan','$db_ijazah_belakang')";
							$sql=mysqli_query($con, $query);
							echo "<script type='text/javascript'>alert('Data berhasil disimpan.');</script>";
							echo '<script>window.location.href="uploadberkas.php"</script>';
						}
						else
						{
							// file type error
							$error="Format Ijazah Belakang / SKL yang diizinkan hanya: " . implode(', ',$allowed_file_types);
							echo "<script type='text/javascript'>alert('$error');</script>";
							echo '<script>window.history.back()</script>';		
						}
					}
					else
					{
						// file type error
						$error="Format Ijazah Depan yang diizinkan hanya: " . implode(', ',$allowed_file_types);
						echo "<script type='text/javascript'>alert('$error');</script>";
						echo '<script>window.history.back()</script>';		
					}
				}
				else
				{
					// file type error
					$error="Format KIP yang diizinkan hanya: " . implode(', ',$allowed_file_types);
					echo "<script type='text/javascript'>alert('$error');</script>";
					echo '<script>window.history.back()</script>';		
				}
			}
			else
			{
				// file type error
				$error="Format KTP Ibu yang diizinkan hanya: " . implode(', ',$allowed_file_types);
				echo "<script type='text/javascript'>alert('$error');</script>";
				echo '<script>window.history.back()</script>';		
			}
		}
		else
		{
			// file type error
			$error="Format KTP Ayah yang diizinkan hanya: " . implode(', ',$allowed_file_types);
			echo "<script type='text/javascript'>alert('$error');</script>";
			echo '<script>window.history.back()</script>';		
		}
	}
	else
	{
		// file type error
		$error="Format Akte Kelahiran yang diizinkan hanya: " . implode(', ',$allowed_file_types);
		echo "<script type='text/javascript'>alert('$error');</script>";
		echo '<script>window.history.back()</script>';		
	}
}
else
{
	// file type error
	$error="Format Kartu Keluarga yang diizinkan hanya: " . implode(', ',$allowed_file_types);
	echo "<script type='text/javascript'>alert('$error');</script>";
	echo '<script>window.history.back()</script>';		
}
?>