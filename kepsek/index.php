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
					    $query_jumlah=mysqli_query($con, "select id from login WHERE hak_akses='siswa'");  
						$row_jumlah = mysqli_num_rows($query_jumlah);						
					    $query_berkas=mysqli_query($con, "select id from upload_berkas WHERE status_berkas='1'");  
						$row_berkas = mysqli_num_rows($query_berkas);						
					    $query_nilai=mysqli_query($con, "select id from upload_nilai WHERE keputusan='1'");  
						$row_nilai= mysqli_num_rows($query_nilai);						
					    $query_lulus=mysqli_query($con, "select id from upload_nilai WHERE keputusan='2'");  
						$row_lulus= mysqli_num_rows($query_lulus);						
					    $query_tidak=mysqli_query($con, "select id from upload_nilai WHERE keputusan='3'");  
						$row_tidak= mysqli_num_rows($query_tidak);
					?>
					<!-- QUERY END -->
        <!-- page content -->
        <div class="right_col" role="main">
		    <div class="col-md-12 col-sm-12  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>DASHBOARD</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
			<div class=" top_tiles" style="margin: 10px 0;">
              <div class="col-md-2 col-sm-3  tile">
                <span>Jumlah Peserta</span>
                <h2><?=$row_jumlah;?></h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
              <div class="col-md-2 col-sm-3  tile">
                <span>Siap Validasi Berkas</span>
                <h2><?=$row_berkas;?></h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
              <div class="col-md-2 col-sm-3  tile">
                <span>Siap Seleksi Nilai</span>
                <h2><?=$row_nilai;?></h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 125px;"></canvas>
                  </span> 
              </div>
              <div class="col-md-2 col-sm-3  tile">
                <span>Lulus Seleksi</span>
                <h2><?=$row_lulus;?></h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
              </div>
              <div class="col-md-2 col-sm-3  tile">
                <span>Tidak Lulus Seleksi</span>
                <h2><?=$row_tidak;?></h2>
                <span class="sparkline_one" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                  </span>
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
