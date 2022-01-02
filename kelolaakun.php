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
							<h3>Akun</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<!-- QUERY START -->
						<?php
						$nisn=$_SESSION['nisn'];
						$query = mysqli_query($con, "SELECT * FROM login WHERE nisn='$nisn'") or die(mysqli_connect_error());
						$row = mysqli_fetch_assoc($query);
						?>
					<!-- QUERY end -->
					<div class="row">						
						<div class="col-md-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Informasi Akun</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Lengkap</label>
											<div class="col-md-3 col-sm-6 ">
												<input type="text" name="nisn" id="first-name" required="required" class="form-control" disabled value="<?=$row['nama'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">NISN</label>
											<div class="col-md-3 col-sm-6 ">
												<input type="text" name="password" id="first-name" required="required" class="form-control" disabled value="<?=$row['nisn'];?>">
											</div>
										</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Ganti Password<small>abaikan jika tidak ingin mengganti password</small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="changepw.php">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Password Lama<span class="required">*</span></label>
											<div class="col-md-3 col-sm-6 ">
												<input type="password" name="old" id="first-name" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Password Baru <span class="required">*</span></label>
											<div class="col-md-3 col-sm-6 ">
												<input type="password" name="new" id="first-name" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Konfirmasi Password Baru<span class="required">*</span></label>
											<div class="col-md-3 col-sm-6 ">
												<input type="password" name="rep" id="first-name" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="submit">Simpan</button>
											</div>
										</div>
									</form>
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
