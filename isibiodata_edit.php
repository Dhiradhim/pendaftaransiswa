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
						$nisn=$_POST['nisn'];
					    $query=mysqli_query($con, "select * from biodata WHERE nisn='$nisn'");  
						$row = mysqli_fetch_assoc($query);
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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="isibiodata_edit_save.php" enctype="multipart/form-data" >
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Lengkap</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" disabled="disabled" class="form-control" value="<?=$row_user['nama'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NISN</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" disabled="disabled" class="form-control" value="<?=$row_user['nisn'];?>">
												<input type="hidden" name="nisn" class="form-control" value="<?=$row_user['nisn'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="tempat_lahir"  value="<?=$row['tempat_lahir'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir </label>
											<div class="col-md-4 xdisplay_inputx form-group row has-feedback">
												<input type="date" name="tanggal_lahir" class="form-control" value="<?=$row['tanggal_lahir'];?>">
											</div>
										</div>
										<div class="radio item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin </label>
											<div class="col-md-6 col-sm-6 ">
												<input type="radio" class="flat" value="Laki-laki" name="jenis_kelamin" <?php if($row['jenis_kelamin']=="Laki-laki") { echo 'checked'; } ?>> Laki-laki
												<input type="radio" class="flat" value="Perempuan" name="jenis_kelamin" <?php if($row['jenis_kelamin']=="Perempuan") { echo 'checked'; } ?>> Perempuan
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Agama </label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" required name="agama">
													<option disabled selected>Pilih</option>
													<option value="Islam" <?php if($row['agama']=="Islam") { echo 'selected'; } ?>>Islam</option>
													<option value="Kristen" <?php if($row['agama']=="Kristen") { echo 'selected'; } ?>>Kristen</option>
													<option value="Katolik" <?php if($row['agama']=="Katolik") { echo 'selected'; } ?>>Katolik</option>
													<option value="Hindu" <?php if($row['agama']=="Hindu") { echo 'selected'; } ?>>Hindu</option>
													<option value="Budha" <?php if($row['agama']=="Budha") { echo 'selected'; } ?>>Budha</option>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
											<div class="col-md-8 col-sm-6 ">
												<textarea required class="form-control" rows="3" name="alamat_lengkap"><?=$row['alamat_lengkap'];?></textarea>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No. Handphone</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="no_hp"  value="<?=$row['no_hp'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Jurusan </label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" required name="jurusan">
													<option disabled selected>Pilih</option>
													<option <?php if($row['jurusan']=="Teknik Komputer dan Jaringan") { echo 'selected'; } ?> value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
													<option <?php if($row['jurusan']=="Otomatisasi dan Tata Kelola Perkantoran") { echo 'selected'; } ?> value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
													<option <?php if($row['jurusan']=="Teknik Bisnis Sepeda Motor") { echo 'selected'; } ?> value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Foto</label>
											<div class="col-md-6 col-sm-6 ">
												<img src="<?=$row['foto'];?>" width="100px"><br>
												<input id="foto" name="foto" class="form-control" type="file"  >
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
												<input id="middle-name" class="form-control" type="text" name="nama_sekolah"  value="<?=$row['nama_sekolah'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Alamat Sekolah Asal</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea class="form-control" rows="2" required name="alamat_sekolah"><?=$row['alamat_sekolah'];?></textarea>
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
												<input id="middle-name" class="form-control" type="text" name="nama_ayah"  value="<?=$row['nama_ayah'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan Ayah</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="pendidikan_ayah"  value="<?=$row['pendidikan_ayah'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan Ayah</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="pekerjaan_ayah"  value="<?=$row['pekerjaan_ayah'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Ibu</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="nama_ibu"  value="<?=$row['nama_ibu'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan Ibu</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="pendidikan_ibu"  value="<?=$row['pendidikan_ibu'];?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan Ibu</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="pekerjaan_ibu"  value="<?=$row['pekerjaan_ibu'];?>">
											</div>
										</div>

										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-danger" type="button" onclick="window.history.back()">Cancel</button>
												<button type="submit" class="btn btn-success">Submit</button>
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
