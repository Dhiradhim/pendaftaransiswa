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
							<h3>Upload Berkas</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<!-- QUERY START -->
					<?php 
						$nisn=$_SESSION['nisn'];
						$query=mysqli_query($con, "select * from upload_berkas WHERE nisn='$nisn'");  
						$row = mysqli_fetch_assoc($query);
						if(mysqli_num_rows($query) > 0) {
					?>
					<!-- QUERY END -->
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<div class="x_panel">
								<div class="x_title">
									<h2>Upload Berkas<small>*Format file jpg, jpeg, gif atau png</small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kartu Keluarga<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												  <button class="btn btn-success" onclick=" window.open('<?=$row['kartu_keluarga']?>','_blank')"> Lihat Berkas</button>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Akta Kelahiran<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<button class="btn btn-success" onclick=" window.open('<?=$row['akte_kelahiran']?>','_blank')"> Lihat Berkas</button>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">KTP Ayah<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<button class="btn btn-success" onclick=" window.open('<?=$row['ktp_ayah']?>','_blank')"> Lihat Berkas</button>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">KTP Ibu<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<button class="btn btn-success" onclick=" window.open('<?=$row['ktp_ibu']?>','_blank')"> Lihat Berkas</button>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">KIP<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<button class="btn btn-success" onclick=" window.open('<?=$row['kip']?>','_blank')"> Lihat Berkas</button>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Ijazah Depan<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<button class="btn btn-success" onclick=" window.open('<?=$row['ijazah_depan']?>','_blank')"> Lihat Berkas</button>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Ijazah Belakang/SKL<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<button class="btn btn-success" onclick=" window.open('<?=$row['ijazah_belakang']?>','_blank')"> Lihat Berkas</button>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-danger" type="button" onclick="window.history.back()">Back</button>
											</div>
										</div>
								</div>
							</div>
						</div>
					</div>
					<?php } else { ?>
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<div class="x_panel">
								<div class="x_title">
									<h2>Upload Berkas<small>*Format file jpg, jpeg, gif atau png</small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="uploadberkas_save.php" enctype="multipart/form-data">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kartu Keluarga<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="kartu_keluarga" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Akta Kelahiran<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="akte_kelahiran" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">KTP Ayah<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="ktp_ayah" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">KTP Ibu<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="ktp_ibu" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">KIP<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="kip" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Ijazah Depan<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="ijazah_depan" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Ijazah Belakang/SKL<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="ijazah_belakang" required="required">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-danger" type="button" onclick="window.history.back()">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>
								</div>
							</div>
						</div>
					</div>
					</form>
					<?php } ?>
					
		
        </div>
		</div>
        <!-- /page content -->

<!-- FOOTER START -->
 <?php include('footer.html'); ?>
<!-- FOOTER END -->
</html>
