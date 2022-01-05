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
							<h3>Validasi Berkas</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<!-- QUERY START -->
					<?php
					$nisn=$_GET['nisn'];
					$query=mysqli_query($con, "select * from biodata WHERE nisn='$nisn'");  
					$row = mysqli_fetch_assoc($query);
					$query_login=mysqli_query($con, "select * from login WHERE nisn='$nisn'");  
					$row_login = mysqli_fetch_assoc($query_login);
					$query_berkas=mysqli_query($con, "select * from upload_berkas WHERE nisn='$nisn'");  
					$row_berkas = mysqli_fetch_assoc($query_berkas);
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
											<div class="item form-group">
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Lengkap</label>
												<div class="col-md-6 col-sm-6 ">
													<input type="text" disabled="disabled" class="form-control" value="<?=$row_login['nama'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NISN </label>
												<div class="col-md-6 col-sm-6 ">
													<input type="text" disabled="disabled" class="form-control" value="<?=$row_login['nisn'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir</label>
												<div class="col-md-6 col-sm-6 ">
													<input id="middle-name" class="form-control" type="text" name="tempat_lahir" required="required" disabled="disabled" value="<?=$row['tempat_lahir'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir</label>
												<div class="col-md-6 col-sm-6 ">
													<input id="middle-name" class="form-control" type="text" name="tempat_lahir" required="required" disabled="disabled" value="<?=$row['tanggal_lahir'];?>">
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
								</div>
							</div>
						</div>
						
						<div class="col-md-6">
							
							<div class="x_panel">
								<div class="x_title">
									<h2>Validasi</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kartu Keluarga<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												  <button class="btn btn-success" onclick=" window.open('../<?=$row_berkas['kartu_keluarga']?>','_blank')"> Lihat Berkas</button>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Akta Kelahiran<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<button class="btn btn-success" onclick=" window.open('../<?=$row_berkas['akte_kelahiran']?>','_blank')"> Lihat Berkas</button>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">KTP Ayah<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<button class="btn btn-success" onclick=" window.open('../<?=$row_berkas['ktp_ayah']?>','_blank')"> Lihat Berkas</button>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">KTP Ibu<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<button class="btn btn-success" onclick=" window.open('../<?=$row_berkas['ktp_ibu']?>','_blank')"> Lihat Berkas</button>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">KIP<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<button class="btn btn-success" onclick=" window.open('../<?=$row_berkas['kip']?>','_blank')"> Lihat Berkas</button>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Ijazah Depan<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<button class="btn btn-success" onclick=" window.open('../<?=$row_berkas['ijazah_depan']?>','_blank')"> Lihat Berkas</button>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Ijazah Belakang/SKL<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<button class="btn btn-success" onclick=" window.open('../<?=$row_berkas['ijazah_belakang']?>','_blank')"> Lihat Berkas</button>
											</div>
										</div>
								</div>
							</div>
							
							<div class="x_panel">
								<div class="x_title">
								  <h2>Validasi</h2>
								  <div class="clearfix"></div>
								</div>
								<div class="x_content">
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="pesan_berkas.php">
								  		<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Berkas Belum Valid beri pesan</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea class="form-control" rows="3" name="pesan_berkas"><?=$row_berkas['pesan_berkas'];?></textarea>
												<input type="hidden" value="<?=$nisn;?>" name="nisn">
											</div>
										</div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="submit">Kirim</button>
											</div>
										</div>
									</form>
									<div class="ln_solid"></div>
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="validasi_berkas.php">
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Semua Berkas Valid?</label>
											<div class="col-md-6 col-sm-6 ">
												
												<?php
												if($row_berkas['status_berkas']==2)
												{
													$nisn=$_GET['nisn'];
													echo '<input type="hidden" value="'.$nisn.'"name="nisn">';
													echo '<button class="btn btn-primary" type="submit">YA</button>';
												}
												else
												{
													echo '<button class="btn btn-success" disabled type="submit">SUDAH TERVALIDASI</button>';
												}
												?>
												<button class="btn btn-danger" type="button" onclick="window.history.back()">Kembali</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					</form>
        </div>
		</div>
        <!-- /page content -->

<!-- FOOTER START -->
 <?php include('footer.html'); ?>
<!-- FOOTER END -->
</html>
