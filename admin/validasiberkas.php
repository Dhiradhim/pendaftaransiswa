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
                <h3>Siap Validasi</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>NISN</th>
                          <th>Asal Sekolah</th>
                          <th>Kelola</th>
                        </tr>
                      </thead>
                      <tbody>
					  	<?php
						$query_nisn = mysqli_query($con, "SELECT nisn FROM upload_berkas ORDER BY id") or die(mysqli_connect_error());
						$row_nisn = mysqli_fetch_assoc($query_nisn);
						$count = 1;
						do { ?>
                        <tr>
						<?php
							if (empty($row_nisn['nisn']))
							{
								echo "<script type='text/javascript'>alert('Belum ada Siswa yang upload berkas.');</script>";
								echo '<script>window.location.href="index.php"</script>';
							} else {								
							$nisn=$row_nisn['nisn'];
							$query = mysqli_query($con, "SELECT * FROM biodata WHERE nisn='$nisn' ORDER BY id") or die(mysqli_connect_error());	
							$row = mysqli_fetch_assoc($query);
							$query_nama = mysqli_query($con, "SELECT nama FROM login WHERE nisn='$nisn' ") or die(mysqli_connect_error());
							$row_nama = mysqli_fetch_assoc($query_nama);
							$query_berkas = mysqli_query($con, "SELECT status_berkas FROM upload_berkas WHERE nisn='$nisn' ") or die(mysqli_connect_error());
							$row_berkas = mysqli_fetch_assoc($query_berkas);
							
						?>
                          <td><?=$count;?></td>
                          <td><?=$row_nama['nama'];?></td>
                          <td><?=$row['nisn'];?></td>
                          <td><?=$row['nama_sekolah'];?></td>
                          <td>
						  <?php
						  if ($row_berkas['status_berkas']==1)
						  {
						  ?>
						  <a href="#" class="btn btn-warning btn-sm">Belum Upload Berkas</a>
						  <?php
						  } else if ($row_berkas['status_berkas']==2)
						  {
						  ?>
						  <a href="validasiberkasdetail.php?nisn=<?=$row['nisn']?>" class="btn btn-danger btn-sm">Belum Validasi</a>
						  <?php
						  } else 
						  {
						  ?>
						  <a href="validasiberkasdetail.php?nisn=<?=$row['nisn']?>" class="btn btn-success btn-sm">Sudah Validasi</a>
						  <?php } ?>
						  </td>
                        </tr>
						<?php 
						$count++;
							}} while ($row_nisn = mysqli_fetch_assoc($query_nisn)); 
						?>
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
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
