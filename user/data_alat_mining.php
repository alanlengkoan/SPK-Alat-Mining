<?php include_once 'atribut/head.php'; ?>

<!-- Page Wrapper -->
<div id="wrapper">
  <!-- begin:: siderbar -->
  <?php include_once 'atribut/sidebar.php'; ?>
  <!-- end:: siderbar -->

  <div id="content-wrapper" class="d-flex flex-column">
    <!-- begin:: main content -->
    <div id="content">

      <?php include_once 'atribut/navbar.php'; ?>

      <!-- begin:: content -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Data Alat Mining </b></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" id="dataTable" width="100%"
                  cellspacing="0">
                  <thead align="center">
                    <th>ID</th>
                    <th>Alat Mining</th>
                    <th>Harga ($)</th>
                    <th>Kecepatan (Kh/s)</th>
                    <th>Daya Listrik (Watt)</th>
                    <th>Keuntungan/Hari ($)</th>
                    <th>Detail</th>
                  </thead>
                  <tbody>
                    <?php
                      $query="SELECT * FROM data_alat";
                      $result=$konek->query($query);
                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
                    <tr>
                      <td align="center"><?php echo $row['id_alat']; ?></td>
                      <td align="center"><?php echo $row['alatmining']; ?></td>
                      <td align="center"><?php echo number_format($row['harga']); ?></td>
                      <td align="center"><?php echo $row['kecepatan']; ?></td>
                      <td align="center"><?php echo $row['listrik']; ?>W</td>
                      <td align="center"><?php echo $row['keuntungan']; ?></td>
                      <td align="center">
                        <a class="btn btn-info btn-icon-split"
                          href="data_alat_mining_detail.php?id_alat=<?php echo $row['id_alat'] ?>">
                          <span class="icon text-white">
                            <i class="fas fa-info-circle"></i>
                          </span>
                        </a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end:: content -->
    </div>
    <!-- end:: main content -->
  </div>
</div>
<!-- End of Page Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; 2019 Marcelino Derry Utomo</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php include_once 'atribut/foot.php'; ?>