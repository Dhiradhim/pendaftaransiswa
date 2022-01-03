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
							<h3>Seleksi Nilai</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<!-- QUERY START -->
					<?php 
						$nisn=$_GET['nisn'];
						$query_berkas=mysqli_query($con, "select ijazah_belakang from upload_berkas WHERE nisn='$nisn'");  
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
					`			<img src="../<?=$row_berkas['ijazah_belakang']?>" width="650" alt="Ijazah Belakang / SKL">
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
								</div>
							</div>
							
							<div class="x_panel">
								<div class="x_title">
								  <h2>Validasi</h2>
								  <div class="clearfix"></div>
								</div>
								<div class="x_content">
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="pesan_nilai.php">
								  		<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Belum Valid<br>beri pesan</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea class="form-control" rows="3" name="pesan_nilai"><?=$row['pesan_nilai'];?></textarea>
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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="hitung_nilai.php">
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Semua Nilai Valid?</label>
											<div class="col-md-6 col-sm-6 ">
												<?php
												if($row['keputusan']==1)
												{
													$nisn=$_GET['nisn'];
													echo '<input type="hidden" value="'.$nisn.'"name="nisn">';
													echo '<button class="btn btn-primary" type="submit">Hitung Nilai</button>';
												}
												else if($row['keputusan']==2)
												{
													echo '<button class="btn btn-success" type="submit" disabled>LOLOS SELEKSI</button>';
												}
												else 
												{
													echo '<button class="btn btn-danger" type="submit" disabled>TIDAK LOLOS SELEKSI</button>';
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
		
        </div>
		</div>
        <!-- /page content -->

<!-- FOOTER START -->
 <?php include('footer.html'); ?>
<!-- FOOTER END -->
</html>
