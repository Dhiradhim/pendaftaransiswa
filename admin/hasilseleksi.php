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
                <h3>Siap Seleksi</h3>
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
                          <th>Hasil</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
						$query = mysqli_query($con, "SELECT nisn,keputusan FROM upload_nilai ORDER BY id") or die(mysqli_connect_error());
						$row = mysqli_fetch_assoc($query);
						$count = 1;
						do { ?>
                        <tr>
						<?php
							$nisn=$row['nisn'];
							$query_nama = mysqli_query($con, "SELECT nama FROM login WHERE nisn='$nisn' ") or die(mysqli_connect_error());
							$row_nama = mysqli_fetch_assoc($query_nama);
							$query_hasil = mysqli_query($con, "SELECT nama_sekolah FROM biodata WHERE nisn='$nisn' ") or die(mysqli_connect_error());
							$row_hasil = mysqli_fetch_assoc($query_hasil);
						?>
                          <td><?=$count;?></td>
                          <td><?=$row_nama['nama'];?></td>
                          <td><?=$row['nisn'];?></td>
                          <td><?=$row_hasil['nama_sekolah'];?></td>
                          <td>
						  <?php
						  if ($row['keputusan']==1)
						  {
							  echo '<button class="btn btn-primary">MENUNGGU SELEKSI</button>';
						  } else if ($row['keputusan']==2)
						  {
							  echo '<button class="btn btn-success">LOLOS SELEKSI</button>';
						  } else
						  {
							  echo '<button class="btn btn-danger">TIDAK LOLOS SELEKSI</button>';
						  }
						  ?>
						  
						  </td>
                        </tr>
						<?php 
						$count++;
						} while ($row = mysqli_fetch_assoc($query)); 
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
