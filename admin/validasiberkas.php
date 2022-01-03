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
						$query = mysqli_query($con, "SELECT * FROM biodata ORDER BY id") or die(mysqli_connect_error());
						$row = mysqli_fetch_assoc($query);
						$count = 1;
						do { ?>
                        <tr>
						<?php
							$nisn=$row['nisn'];
							$query_nama = mysqli_query($con, "SELECT nama FROM login WHERE nisn='$nisn' ") or die(mysqli_connect_error());
							$row_nama = mysqli_fetch_assoc($query_nama);
						?>
                          <td><?=$count;?></td>
                          <td><?=$row_nama['nama'];?></td>
                          <td><?=$row['nisn'];?></td>
                          <td><?=$row['nama_sekolah'];?></td>
                          <td>
						  <a href="validasiberkasdetail.php?nisn=<?=$row['nisn']?>" class="btn btn-success btn-sm">Validasi</a>
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
