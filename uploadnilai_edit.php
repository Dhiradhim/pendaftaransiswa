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
						$nisn=$_POST['nisn'];
						$query_berkas=mysqli_query($con, "select ijazah_belakang,status_berkas from upload_berkas WHERE nisn='$nisn'");  
						$row_berkas = mysqli_fetch_assoc($query_berkas);
						$query=mysqli_query($con, "select * from upload_nilai WHERE nisn='$nisn'");  
						$row = mysqli_fetch_assoc($query);
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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="uploadnilai_edit_save.php">

										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">PAI</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="pai" value="<?=$row['pai']?>">
												<input type="hidden" name="nisn" class="form-control" value="<?=$row_user['nisn'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">PPKN</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="ppkn" value="<?=$row['ppkn']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bahasa Indonesia</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="bahasa_indonesia" value="<?=$row['bahasa_indonesia']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Matematika</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="matematika" value="<?=$row['matematika']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">IPA</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="ipa" value="<?=$row['ipa']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">IPS</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="ips" value="<?=$row['ips']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bahasa Inggris</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="bahasa_inggris" value="<?=$row['bahasa_inggris']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Seni Budaya</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="seni_budaya" value="<?=$row['seni_budaya']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">PJOK</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="pjok" value="<?=$row['pjok']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Prakarya</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="prakarya" value="<?=$row['prakarya']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Mulok</label>
											<div class="col-md-4">
												<input id="middle-name" class="form-control" type="text" name="mulok" value="<?=$row['mulok']?>">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-8 col-sm-8">
												<button class="btn btn-danger" type="button" onclick="window.history.back()">Cancel</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>
								</div>
							</div>
						</div>
					</div>
        </div>
		</div>
        <!-- /page content -->

<!-- FOOTER START -->
 <?php include('footer.html'); ?>
<!-- FOOTER END -->
</html>
