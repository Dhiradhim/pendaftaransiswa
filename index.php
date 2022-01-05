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
						$nisn=$_SESSION['nisn'];
						$query = mysqli_query($con, "SELECT * FROM konfigurasi") or die(mysqli_connect_error());
						$row = mysqli_fetch_assoc($query);
						$query_berkas = mysqli_query($con, "SELECT status_berkas,pesan_berkas FROM upload_berkas WHERE nisn='$nisn'") or die(mysqli_connect_error());
						$row_berkas = mysqli_fetch_assoc($query_berkas);
						$query_nilai = mysqli_query($con, "SELECT keputusan,pesan_nilai FROM upload_nilai WHERE nisn='$nisn'") or die(mysqli_connect_error());
						$row_nilai = mysqli_fetch_assoc($query_nilai);
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
					<?php if(empty($row_berkas['status_berkas']) OR $row_berkas['status_berkas']== 1 )
					{
					?>
						<h4>Silahkan mengisi biodata dan melakukan upload berkas.</h4><br>
						<h4>Pesan : <?=$row_berkas['pesan_berkas'];?></h4>
					<?php 
					} else if ($row_berkas['status_berkas']==2)
					{ ?>
						<h4>Sedang menunggu proses validasi berkas. </h4>
						<h4>Pesan : <?=$row_berkas['pesan_berkas'];?></h4>
					<?php
					} else if (empty($row_nilai['keputusan']) OR $row_nilai['keputusan']==1)
					{ ?>
						<h4>Berkas anda sudah valid, saat ini sedang dalam proses seleksi nilai. </h4>
						<?php if (empty($row_nilai['pesan_nilai']))
						{?>
							<h4>Pesan :</h4>
						<?php
						} 
						else 
						{
							?>
							<h4>Pesan : <?=$row_nilai['pesan_nilai'];?></h4>
						<?php
						}
					} else if ($row_nilai['keputusan']==2)
					{ ?>
						<h4>Selamat anda lolos seleksi PPDB SMK AZ ZAHRA SEPATAN, Silahkan tunggu informasi selanjutnya. </h4>
						<?php if (empty($row_nilai['pesan_nilai']))
						{?>
							<h4>Pesan :</h4>
						<?php
						} 
						else 
						{
							?>
							<h4>Pesan : <?=$row_nilai['pesan_nilai'];?></h4>
						<?php
						}
					
					} else if ($row_nilai['keputusan']==3)
					{ ?> 
						<h4>Mohon maaf,  anda tidak lolos seleksi PPDB SMK AZ ZAHRA SEPATAN </h4>
						<?php if (empty($row_nilai['pesan_nilai']))
						{?>
							<h4>Pesan :</h4>
						<?php
						} 
						else 
						{
							?>
							<h4>Pesan : <?=$row_nilai['pesan_nilai'];?></h4>
						<?php
						}
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
