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
          <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Bilangan Fuzzy Tiap Kriteria </b></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <!-- <th>ID</th> -->
                    <th> Kode </th>
                    <th> Nilai </th>
                    <th> Bilangan Fuzzy </th>
                  </thead>
                  <tbody>
                    <?php
                      $query="SELECT * FROM fuzzytiapkriteria";
                      $result=$konek->query($query);

                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                    <tr>
                      <td align="center"><?php echo $row['kode']; ?></td>
                      <td align="center"><?php echo $row['nilai']; ?></td>
                      <td align="center"><?php echo $row['bilanganfuzzy']; ?></td>
                    </tr>
                    <?php
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Jenis Dan Bobot Kriteria </b></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <!-- <th>ID</th> -->
                    <th> Kode </th>
                    <th> Kriteria </th>
                    <th> Type </th>
                    <th> Bobot </th>
                  </thead>
                  <tbody>
                    <?php
                      $query="SELECT * FROM moo_kriteria";
                      $result=$konek->query($query);

                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                    <tr>
                      <td align="center"><?php echo $row['kode']; ?></td>
                      <td align="center"><?php echo $row['kriteria']; ?></td>
                      <td align="center"><?php echo $row['type']; ?></td>
                      <td align="center"><?php echo $row['bobot']; ?></td>
                    </tr>
                    <?php
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Nilai Untuk Kriteria Harga </b></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <!-- <th>ID</th> -->
                    <th> ID </th>
                    <th> Harga ($) </th>
                    <th> Bilangan Fuzzy </th>
                    <th> Nilai </th>
                  </thead>
                  <tbody>
                    <?php
                      $query="SELECT * FROM kriteriaharga";
                      $result=$konek->query($query);

                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                    <tr>
                      <td align="center"><?php echo $row['id_harga']; ?></td>
                      <td align="center"><?php echo $row['harga']; ?></td>
                      <td align="center"><?php echo $row['bilanganfuzzy']; ?></td>
                      <td align="center"><?php echo $row['nilai']; ?></td>
                    </tr>
                    <?php
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Nilai Untuk Kriteria Kecepatan </b></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <!-- <th>ID</th> -->
                    <th> ID </th>
                    <th> Kecepatan (Kh/s) </th>
                    <th> Bilangan Fuzzy </th>
                    <th> Nilai </th>
                  </thead>
                  <tbody>
                    <?php
                      $query="SELECT * FROM kriteriakecepatan";
                      $result=$konek->query($query);

                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                    <tr>
                      <td align="center"><?php echo $row['id_kecepatan']; ?></td>
                      <td align="center"><?php echo $row['kecepatan']; ?></td>
                      <td align="center"><?php echo $row['bilanganfuzzy']; ?></td>
                      <td align="center"><?php echo $row['nilai']; ?></td>
                    </tr>
                    <?php
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Nilai Untuk Kriteria Daya Listrik </b></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <!-- <th>ID</th> -->
                    <th> ID </th>
                    <th> Daya Listrik (Watt) </th>
                    <th> Bilangan Fuzzy </th>
                    <th> Nilai </th>
                  </thead>
                  <tbody>
                    <?php
                      $query="SELECT * FROM kriterialistrik";
                      $result=$konek->query($query);

                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                    <tr>
                      <td align="center"><?php echo $row['id_listrik']; ?></td>
                      <td align="center"><?php echo $row['listrik']; ?></td>
                      <td align="center"><?php echo $row['bilanganfuzzy']; ?></td>
                      <td align="center"><?php echo $row['nilai']; ?></td>
                    </tr>
                    <?php
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Nilai Untuk Kriteria Keuntungan </b></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <!-- <th>ID</th> -->
                    <td> ID </td>
                    <th> Keuntungan/Hari ($) </th>
                    <th> Bilangan Fuzzy </th>
                    <th> Nilai </th>
                  </thead>
                  <tbody>
                    <?php
                      $query="SELECT * FROM kriteriakeuntungan";
                      $result=$konek->query($query);

                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                    <tr>
                      <td align="center"><?php echo $row['id_keuntungan']; ?></td>
                      <td align="center"><?php echo $row['keuntungan']; ?></td>
                      <td align="center"><?php echo $row['bilanganfuzzy']; ?></td>
                      <td align="center"><?php echo $row['nilai']; ?></td>
                    </tr>
                    <?php
                      }
                      ?>
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