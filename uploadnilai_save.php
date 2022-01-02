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
$query = "INSERT into upload_nilai (nisn,pai,ppkn,bahasa_indonesia,matematika,ipa,ips,bahasa_inggris,seni_budaya,pjok,prakarya,mulok,jumlah_nilai) values ('$nisn','$pai','$ppkn','$bahasa_indonesia','$matematika','$ipa','$ips','$bahasa_inggris','$seni_budaya','$pjok','$prakarya','$mulok','$jumlah_nilai')";
$sql=mysqli_query($con, $query);
echo "<script type='text/javascript'>alert('Data berhasil disimpan.');</script>";
echo '<script>window.location.href="uploadnilai.php"</script>';

?>