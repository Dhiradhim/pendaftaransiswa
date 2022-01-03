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
							<h3>Konfigurasi</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<!-- QUERY START -->
						<?php
						$query = mysqli_query($con, "SELECT * FROM konfigurasi") or die(mysqli_connect_error());
						$row = mysqli_fetch_assoc($query);
						?>
					<!-- QUERY end -->
					<div class="row">
						<div class="col-md-12">
							<div class="x_panel">
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="status_ppdb.php">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Status PPDB</label>
											<div class="col-md-2 col-sm-6 ">
												<input <?php if( $row['status_ppdb']=='0'){echo 'checked="checked"'; } ?> type="radio" class="flat" value="0" name="status_ppdb"> Tutup
												<input <?php if( $row['status_ppdb']=='1'){echo 'checked="checked"'; } ?> type="radio" class="flat" value="1" name="status_ppdb"> Buka
											</div>
										</div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="submit">Simpan</button>
											</div>
										</div>
									</form>
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="pengumuman.php">
										<div class="item form-group">
											<label for="middle-name" name="pengumuman" class="col-form-label col-md-3 col-sm-3 label-align">Pengumuman</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea class="form-control"name="pengumuman"  rows="3"><?=$row['pengumuman']?></textarea>
											</div>
										</div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="submit">Publikasikan</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						
						<div class="col-md-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Tambah Admin</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="register_admin.php">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Username <span class="required">*</span></label>
											<div class="col-md-3 col-sm-6 ">
												<input type="text" name="nisn" id="first-name" required="required" class="form-control ">
											</div>
										</div>	
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span></label>
											<div class="col-md-3 col-sm-6 ">
												<input type="text" name="nama" id="first-name" required="required" class="form-control ">
											</div>
										</div>										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Hak Akses </label>
											<div class="col-md-2 col-sm-6 ">
												<select class="form-control" required name="hak_akses">
													<option disabled selected>Pilih</option>
													<option value="admin">Administrator</option>
													<option value="kepsek">Kepala Sekolah</option>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Password <span class="required">*</span></label>
											<div class="col-md-3 col-sm-6 ">
												<input type="password" name="password" id="first-name" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Konfirmasi Password <span class="required">*</span></label>
											<div class="col-md-3 col-sm-6 ">
												<input type="password" name="cpassword" id="first-name" required="required" class="form-control ">
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
						
						<div class="col-md-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Nilai Minimum Lulus</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="nilai_minimum.php">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nilai <span class="required">*</span></label>
											<div class="col-md-3 col-sm-6 ">
												<input type="text" name="nilai_minimum" id="first-name" required="required" class="form-control" value="<?=$row['nilai_minimum'];?>">
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
