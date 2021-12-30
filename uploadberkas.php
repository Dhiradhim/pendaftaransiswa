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
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<div class="x_panel">
								<div class="x_title">
									<h2>Upload Berkas<small>*Format file pdf, ukuran maksimal 5MB!</small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kartu Keluarga<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="fileToUpload" id="fileToUpload">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Akta Kelahiran<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="fileToUpload" id="fileToUpload">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">KTP Ayah<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="fileToUpload" id="fileToUpload">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">KTP Ibu<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="fileToUpload" id="fileToUpload">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">KIP<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="fileToUpload" id="fileToUpload">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Ijazah Depan<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="fileToUpload" id="fileToUpload">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Ijazah Belakang/SKL<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="fileToUpload" id="fileToUpload">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
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
