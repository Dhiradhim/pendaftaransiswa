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

					<!-- QUERY START -->
					<?php 
						$nisn=$_SESSION['nisn'];
						$query_berkas=mysqli_query($con, "select * from upload_berkas WHERE nisn='$nisn'");  
						$row_berkas = mysqli_fetch_assoc($query_berkas);
						$query_nilai=mysqli_query($con, "select * from upload_nilai WHERE nisn='$nisn'");  
						$row_nilai = mysqli_fetch_assoc($query_nilai);
						$query_biodata=mysqli_query($con, "select * from biodata WHERE nisn='$nisn'");  
						$row_biodata = mysqli_fetch_assoc($query_biodata);
					?>
					<!-- QUERY END -->
					
        <!-- page content -->
        <div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Cetak Hasil Seleksi</h3>
						</div>
						<div class="title_right">
							<div class="col-md-2 col-sm-2 form-group pull-right">
								<div class="input-group">
									<button class="btn btn-primary" type="button">PRINT</button>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-6">
							<div class="x_panel">
								<div class="x_title">
									<h2>Data Pribadi</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

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
													<input id="middle-name" class="form-control" type="text" name="tempat_lahir" required="required" disabled="disabled" value="<?=$row_biodata['tempat_lahir'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir </label>
												<div class="col-md-4 xdisplay_inputx form-group row has-feedback">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row_biodata['tanggal_lahir'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin </label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row_biodata['jenis_kelamin'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label class="col-form-label col-md-3 col-sm-3 label-align">Agama </label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row_biodata['agama'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
												<div class="col-md-8 col-sm-6 ">
													<textarea required class="form-control" rows="3" name="alamat_lengkap" disabled="disabled"><?=$row_biodata['alamat_lengkap'];?></textarea>
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No. Handphone</label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row_biodata['no_hp'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Jurusan SMK yang dipilih</label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row_biodata['jurusan'];?>">
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
													<input class="form-control" type="text" disabled="disabled" value="<?=$row_biodata['nama_ayah'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan Ayah</label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row_biodata['pendidikan_ayah'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan Ayah</label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row_biodata['pekerjaan_ayah'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Ibu</label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row_biodata['nama_ibu'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan Ibu</label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row_biodata['pendidikan_ibu'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan Ibu</label>
												<div class="col-md-6 col-sm-6 ">
													<input class="form-control" type="text" disabled="disabled" value="<?=$row_biodata['pekerjaan_ibu'];?>">
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
													<input class="form-control" type="text" disabled="disabled" value="<?=$row_biodata['nama_sekolah'];?>">
												</div>
											</div>
											<div class="item form-group">
												<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Alamat Sekolah Asal</label>
												<div class="col-md-6 col-sm-6 ">
													<textarea class="form-control" rows="2" required name="alamat_sekolah" disabled="disabled" ><?=$row_biodata['alamat_sekolah'];?></textarea>
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
									<br />
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Kartu Keluarga</label>
											<div class="col-md-6 col-sm-6 ">
												<?php
												if ($row_berkas['status_berkas']==2){
													echo '<button class="btn btn-success" type="button" disabled="disabled">Sudah Divalidasi</button>';
												} else if ($row_berkas['status_berkas']==1) {
													echo '<button class="btn btn-warning" type="button" disabled="disabled">Menunggu Validasi</button>';
												} else {
													echo '<button class="btn btn-success" type="button" disabled="disabled">NOT OK</button>';
												}
												?>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Akta Kelahiran</label>
											<div class="col-md-6 col-sm-6 ">
												<?php
												if ($row_berkas['status_berkas']==2){
													echo '<button class="btn btn-success" type="button" disabled="disabled">Sudah Divalidasi</button>';
												} else if ($row_berkas['status_berkas']==1) {
													echo '<button class="btn btn-warning" type="button" disabled="disabled">Menunggu Validasi</button>';
												} else {
													echo '<button class="btn btn-success" type="button" disabled="disabled">NOT OK</button>';
												}
												?>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">KTP Ayah</label>
											<div class="col-md-6 col-sm-6 ">
												<?php
												if ($row_berkas['status_berkas']==2){
													echo '<button class="btn btn-success" type="button" disabled="disabled">Sudah Divalidasi</button>';
												} else if ($row_berkas['status_berkas']==1) {
													echo '<button class="btn btn-warning" type="button" disabled="disabled">Menunggu Validasi</button>';
												} else {
													echo '<button class="btn btn-success" type="button" disabled="disabled">NOT OK</button>';
												}
												?>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">KTP Ibu</label>
											<div class="col-md-6 col-sm-6 ">
												<?php
												if ($row_berkas['status_berkas']==2){
													echo '<button class="btn btn-success" type="button" disabled="disabled">Sudah Divalidasi</button>';
												} else if ($row_berkas['status_berkas']==1) {
													echo '<button class="btn btn-warning" type="button" disabled="disabled">Menunggu Validasi</button>';
												} else {
													echo '<button class="btn btn-success" type="button" disabled="disabled">NOT OK</button>';
												}
												?>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">KIP</label>
											<div class="col-md-6 col-sm-6 ">
												<?php
												if ($row_berkas['status_berkas']==2){
													echo '<button class="btn btn-success" type="button" disabled="disabled">Sudah Divalidasi</button>';
												} else if ($row_berkas['status_berkas']==1) {
													echo '<button class="btn btn-warning" type="button" disabled="disabled">Menunggu Validasi</button>';
												} else {
													echo '<button class="btn btn-success" type="button" disabled="disabled">NOT OK</button>';
												}
												?>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">IJAZAH / SKL</label>
											<div class="col-md-6 col-sm-6 ">
												<?php
												if ($row_berkas['status_berkas']==2){
													echo '<button class="btn btn-success" type="button" disabled="disabled">Sudah Divalidasi</button>';
												} else if ($row_berkas['status_berkas']==1) {
													echo '<button class="btn btn-warning" type="button" disabled="disabled">Menunggu Validasi</button>';
												} else {
													echo '<button class="btn btn-success" type="button" disabled="disabled">NOT OK</button>';
												}
												?>
											</div>
										</div>
								</div>
							</div>
							
							<div class="x_panel">
								<div class="x_title">
								  <h2>Jumlah Nilai</h2>
								  <div class="clearfix"></div>
								</div>
								<div class="x_content">

								  <div>
									<div>
									  <center><h1><?php if (empty($row_nilai['jumlah_nilai'])) { ?>	BELUM UPLOAD NILAI
										<?php 
										} else 
										{
										echo $row_nilai['jumlah_nilai'];
										}
										?>
										 
										</h1></center>
									</div>
								  </div>

								</div>
							</div>
							
							<div class="x_panel">
								<div class="x_title">
								  <h2>Keputusan</h2>
								  <div class="clearfix"></div>
								</div>
								<div class="x_content">

								  <div>
									<div>
										<?php
										if (empty($row_nilai['keputusan']))
										{
											echo '<center><h1>BELUM UPLOAD NILAI</h1></center>';
										} else if ($row_nilai['keputusan']==2){
											echo '<center><h1>DITERIMA</h1></center>';
										} else if ($row_nilai['keputusan']==1) {
											echo '<center><h1>MENUNGGU</h1></center>';
										} else {
											echo '<center><h1>TIDAK DITERIMA</h1></center>';
										}
										?>
									</div>
								  </div>

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
