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
		    <div class="col-md-12 col-sm-12  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>PENGUMUMAN</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
					<!-- QUERY START -->
						<?php
						$query = mysqli_query($con, "SELECT * FROM konfigurasi") or die(mysqli_connect_error());
						$row = mysqli_fetch_assoc($query);
						$query_user = mysqli_query($con, "SELECT status_berkas,pesan_berkas,keputusan,pesan_nilai FROM upload_berkas INNER JOIN upload_nilai ON upload_berkas.nisn=upload_nilai.nisn WHERE upload_berkas.nisn='$nisn'") or die(mysqli_connect_error());
						$row_user = mysqli_fetch_assoc($query_user);
						?>
					<!-- QUERY end -->
                  <div>
                    <div>
                      <h4><?=$row['pengumuman'];?></h4>
                    </div>
                  </div>

                </div>
              </div>
            </div>
			
		    <div class="col-md-12 col-sm-12  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Status Pendaftaran</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
				
                  <div>
                    <div>
					<?php if($row_user['status_berkas']==0)
					{
						?>
                      <h4>Sedang menunggu proses validasi berkas. </h4>
					<?php 
					} else if ($row_user['keputusan']==0)
					{ ?>
						<h4>Berkas anda sudah valid, saat ini sedang dalam proses seleksi nilai. </h4>
					<?php
					} else if ($row_user['keputusan']==1)
					{ ?>
						<h4>Selamat anda lolos seleksi PPDB SMK AZ ZAHRA SEPATAN, Silahkan tunggu informasi selanjutnya. </h4>
					<?php
					} else if ($row_user['keputusan']==2)
					{ ?> 
						<h4>mohon maaf,  anda tidak lolos seleksi PPDB SMK AZ ZAHRA SEPATAN </h4>
					<?php
					}
					?>
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
