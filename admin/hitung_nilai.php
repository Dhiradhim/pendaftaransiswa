<?php
session_start();  
include('../koneksi.php');
$nisn=$_POST['nisn'];
$query_nilai_min=mysqli_query($con, "select nilai_minimum from konfigurasi");  
$row_nilai_min=mysqli_fetch_assoc($query_nilai_min);
$query_nilai=mysqli_query($con, "select jumlah_nilai from upload_nilai WHERE nisn='$nisn'");  
$row_nilai=mysqli_fetch_assoc($query_nilai);
$jumlah_nilai=$row_nilai['jumlah_nilai'];
$nilai_minimum=$row_nilai_min['nilai_minimum'];
if($jumlah_nilai > $nilai_minimum)
{
	$query = "UPDATE upload_nilai SET keputusan='1' WHERE nisn='$nisn'";
	$sql=mysqli_query($con, $query);
	echo '<script type="text/javascript">alert("Jumlah Nilai Peserta : '.$jumlah_nilai.'\r\Jumlah Minimum Lulus : '.$nilai_minimum.'\r\n\r\nPeserta dinyatakan LOLOS SELEKSI!");</script>';
	echo '<script>window.location.href="seleksinilaidetail.php?nisn='.$nisn.'"</script>';	
}
else
{
	$query = "UPDATE upload_nilai SET keputusan='2' WHERE nisn='$nisn'";
	$sql=mysqli_query($con, $query);
	echo '<script type="text/javascript">alert("Jumlah Nilai Peserta : '.$jumlah_nilai.'\r\Jumlah Minimum Lulus : '.$nilai_minimum.'\r\n\r\nPeserta dinyatakan TIDAK LOLOS SELEKSI!");</script>';
	echo '<script>window.location.href="seleksinilaidetail.php?nisn='.$nisn.'"</script>';	
}

?>