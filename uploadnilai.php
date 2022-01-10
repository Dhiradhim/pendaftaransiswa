<!DOCTYPE html>
<html lang="en">

<!-- HEAD START -->
<?php include('head.html'); ?>
<!-- HEAD END -->

<!-- SIDEBAR START -->
 <?php include('sidebar.html'); ?>
<!-- SIDEBAR END -->

<!-- TOP MENU START -->
 <?php include('top.html'); ?>
<!-- TOP MENU END -->

        <!-- page content -->
        <div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Upload Nilai</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<!-- QUERY START -->
					<?php 
						$nisn=$_SESSION['nisn'];
						$query_berkas=mysqli_query($con, "select ijazah_belakang,status_berkas from upload_berkas WHERE nisn='$nisn'");  
						$row_berkas = mysqli_fetch_assoc($query_berkas);
						$query=mysqli_query($con, "select * from upload_nilai WHERE nisn='$nisn'");  
						$row = mysqli_fetch_assoc($query);
						if(empty($row_berkas['status_berkas']) OR $row_berkas['status_berkas']==1) 
						{
							echo "<script type='text/javascript'>alert('Silahkan upload berkas terlebih dahulu.');</script>";
							echo '<script>window.location.href="uploadberkas.php"</script>';
						}
						else if($row_berkas['status_berkas']==2) 
						{
							echo "<script type='text/javascript'>alert('Sedang dalam proses Validasi Berkas.');</script>";
							echo '<script>window.location.href="index.php"</script>';
						} else if (empty($row['keputusan']))
						{
					?>
					<!-- QUERY END -->
					<div class="row">
						<div class="col-md-7">
							<div class="x_panel">
								<div class="x_title">
									<h2>Nama Peserta</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
								<img src="<?=$row_berkas['ijazah_belakang']?>" width="650" alt="Ijazah Belakang / SKL">
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="x_panel">
								<div class="x_title">
									<h2>Masukkan Nilai Ujian Sekolah</small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="uploadnilai_save.php">

										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">PAI</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="pai">
												<input type="hidden" name="nisn" class="form-control" value="<?=$row_user['nisn'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">PPKN</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="ppkn">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bahasa Indonesia</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="bahasa_indonesia">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Matematika</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="matematika">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">IPA</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="ipa">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">IPS</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="ips">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bahasa Inggris</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="bahasa_inggris">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Seni Budaya</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="seni_budaya">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">PJOK</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="pjok">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Prakarya</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="prakarya">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Mulok</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="mulok">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-8 col-sm-8">
												<button class="btn btn-danger" type="button" onclick="window.history.back()">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>
								</div>
							</div>
						</div>
					</div>
						<?php } else {?>
					
					<div class="row">
						<div class="col-md-7">
							<div class="x_panel">
								<div class="x_title">
									<h2>Nama Peserta</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
								<img src="<?=$row_berkas['ijazah_belakang']?>" width="650" alt="Ijazah Belakang / SKL">
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="x_panel">
								<div class="x_title">
									<h2>Nilai Ujian Sekolah</small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />

										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">PAI</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="pai" disabled value="<?=$row['pai']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">PPKN</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="ppkn" disabled value="<?=$row['ppkn']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bahasa Indonesia</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="bahasa_indonesia" disabled value="<?=$row['bahasa_indonesia']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Matematika</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="matematika" disabled value="<?=$row['matematika']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">IPA</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="ipa" disabled value="<?=$row['ipa']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">IPS</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="ips" disabled value="<?=$row['ips']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bahasa Inggris</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="bahasa_inggris" disabled value="<?=$row['bahasa_inggris']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Seni Budaya</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="seni_budaya" disabled value="<?=$row['seni_budaya']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">PJOK</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="pjok" disabled value="<?=$row['pjok']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Prakarya</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="prakarya" disabled value="<?=$row['prakarya']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Mulok</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="mulok" disabled value="<?=$row['mulok']?>">
											</div>
										</div>
										<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="uploadnilai_edit.php" enctype="multipart/form-data" >
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-8 col-sm-8">
												<input type="hidden" name="nisn" class="form-control" value="<?=$row_user['nisn'];?>">
												<button class="btn btn-danger" type="button" onclick="window.history.back()">Back</button>
												<?php
												if ($row['keputusan']=="1"){
												echo '<button type="submit" class="btn btn-primary">Edit Data</button>';
												}?>
											</div>
										</div>
										</form>
								</div>
							</div>
						</div>
					</div>
						<?php } ?>
        </div>
		</div>
        <!-- /page content -->

<!-- FOOTER START -->
 <?php include('footer.html'); ?>
<!-- FOOTER END -->
</html>
