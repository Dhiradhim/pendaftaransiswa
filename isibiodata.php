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
							<h3>ISI BIODATA</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<!-- QUERY START -->
					<?php 
						$nisn=$_SESSION['nisn'];
					    $query=mysqli_query($con, "select * from biodata WHERE nisn='$nisn'");  
						$row = mysqli_fetch_assoc($query);
						if(mysqli_num_rows($query) > 0) {
					?>
					<!-- QUERY END -->
						<div class="row">
							<div class="col-md-6">
								<div class="x_panel">
									<div class="x_title">
										<h2>Data Pribadi</h2>
										<div class="clearfix"></div>
									</div>
									<div class="x_content">
										<br />
										<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="isibiodata_save.php" enctype="multipart/form-data" >
											<div class="item form-group">
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Lengkap</label>
												<div class="col-md-6 col-sm-6 ">
													<input type="text" disabled="disabled" class="form-control" value="<?=$row_user['nama'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NISN </label>
												<div class="col-md-6 col-sm-6 ">
													<input type="text" disabled="disabled" class="form-control" value="<?=$row_user['nisn'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir</label>
												<div class="col-md-6 col-sm-6 ">
													<input id="middle-name" class="form-control" type="text" name="tempat_lahir" required="required" disabled="disabled" value="<?=$row['tempat_lahir'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir </label>
												<div class="col-md-4 xdisplay_inputx form-group row has-feedback">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row['tanggal_lahir'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin </label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row['jenis_kelamin'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label class="col-form-label col-md-3 col-sm-3 label-align">Agama </label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row['agama'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
												<div class="col-md-8 col-sm-6 ">
													<textarea required class="form-control" rows="3" name="alamat_lengkap" disabled="disabled"><?=$row['alamat_lengkap'];?></textarea>
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No. Handphone</label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row['no_hp'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Jurusan SMK yang dipilih</label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row['jurusan'];?>">
												</div>
											</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="x_panel">
									<div class="x_title">
										<h2>Data Sekolah Asal</h2>
										<div class="clearfix"></div>
									</div>
									<div class="x_content">
										<br />
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Sekolah Asal</label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row['nama_sekolah'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Alamat Sekolah Asal</label>
												<div class="col-md-6 col-sm-6 ">
													<textarea class="form-control" rows="2" required name="alamat_sekolah" disabled="disabled" ><?=$row['alamat_sekolah'];?></textarea>
												</div>
											</div>
									</div>
								</div>
							
							<div class="x_panel">
								<div class="x_title">
										<h2>Data Orang Tua / Wali</h2>
										<div class="clearfix"></div>
									</div>
									<div class="x_content">
										<br />
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Ayah</label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row['nama_ayah'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan Ayah</label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row['pendidikan_ayah'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan Ayah</label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row['pekerjaan_ayah'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Ibu</label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row['nama_ibu'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan Ibu</label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row['pendidikan_ibu'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan Ibu</label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row['pekerjaan_ibu'];?>">
												</div>
											</div>

											<div class="ln_solid"></div>
											<div class="item form-group">
												<div class="col-md-6 col-sm-6 offset-md-3">
													<button class="btn btn-danger" type="button" onclick="window.history.back()">Cancel</button>
													<button class="btn btn-primary" type="reset" disabled>Reset</button>
													<button type="submit" class="btn btn-success" disabled>Submit</button>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>
					<?php } else { ?>
						<div class="row">
						<div class="col-md-6">
							<div class="x_panel">
								<div class="x_title">
									<h2>Data Pribadi</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="isibiodata_save.php" enctype="multipart/form-data" >
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Lengkap</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" disabled="disabled" class="form-control" value="<?=$row_user['nama'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NISN </label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" disabled="disabled" class="form-control" value="<?=$row_user['nisn'];?>">
												<input type="hidden" name="nisn" class="form-control" value="<?=$row_user['nisn'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="tempat_lahir" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir </label>
											<div class="col-md-4 xdisplay_inputx form-group row has-feedback">
												<input type="date" name="tanggal_lahir" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin </label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" required name="jenis_kelamin">
													<option disabled selected>Pilih</option>
													<option value="Laki-laki">Laki-Laki</option>
													<option value="Perempuan">Perempuan</option>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Agama </label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" required name="agama">
													<option disabled selected>Pilih</option>
													<option value="Islam">Islam</option>
													<option value="Kristen">Kristen</option>
													<option value="Katolik">Katolik</option>
													<option value="Hindu">Hindu</option>
													<option value="Budha">Budha</option>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
											<div class="col-md-8 col-sm-6 ">
												<textarea required class="form-control" rows="3" name="alamat_lengkap"></textarea>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No. Handphone</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="no_hp" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Jurusan SMK yang dipilih</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="jurusan" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Foto</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="foto" name="foto" class="form-control" type="file"  required="required">
											</div>
										</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="x_panel">
								<div class="x_title">
									<h2>Data Sekolah Asal</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Sekolah Asal</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="nama_sekolah" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Alamat Sekolah Asal</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea class="form-control" rows="2" required name="alamat_sekolah"></textarea>
											</div>
										</div>
								</div>
							</div>
						
						<div class="x_panel">
							<div class="x_title">
									<h2>Data Orang Tua / Wali</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Ayah</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="nama_ayah" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan Ayah</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="pendidikan_ayah" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan Ayah</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="pekerjaan_ayah" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Ibu</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="nama_ibu" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan Ibu</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="pendidikan_ibu" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan Ibu</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="pekerjaan_ibu" required="required">
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
