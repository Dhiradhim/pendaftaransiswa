<?php
session_start();  
include('koneksi.php');
$nisn=$_POST['nisn'];
$pai=$_POST['pai'];
$ppkn=$_POST['ppkn'];
$bahasa_indonesia=$_POST['bahasa_indonesia'];
$matematika=$_POST['matematika'];
$ipa=$_POST['ipa'];
$ips=$_POST['ips'];
$bahasa_inggris=$_POST['bahasa_inggris'];
$seni_budaya=$_POST['seni_budaya'];
$pjok=$_POST['pjok'];
$prakarya=$_POST['prakarya'];
$mulok=$_POST['mulok'];
$jumlah_nilai=$pai+$ppkn+$bahasa_indonesia+$matematika+$ipa+$ips+$bahasa_inggris+$seni_budaya+$pjok+$prakarya+$mulok;
$query = "UPDATE upload_nilai SET nisn='$nisn',pai='$pai',ppkn='$ppkn',bahasa_indonesia='$bahasa_indonesia',matematika='$matematika',ipa='$ipa',ips='$ips',bahasa_inggris='$bahasa_inggris',seni_budaya='$seni_budaya',pjok='$pjok',prakarya='$prakarya',mulok='$mulok',jumlah_nilai='$jumlah_nilai' WHERE nisn='$nisn'";
$sql=mysqli_query($con, $query);
$query = "UPDATE upload_berkas SET status_berkas='3' WHERE nisn='$nisn'";
$sql=mysqli_query($con, $query);
echo "<script type='text/javascript'>alert('Data berhasil disimpan.');</script>";
echo '<script>window.location.href="uploadnilai.php"</script>';

?>