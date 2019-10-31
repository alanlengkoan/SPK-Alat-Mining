<?php include_once 'atribut/head.php'; ?>

<?php
function bacaHTML($url){
  // mengambil file html
  $file = file_get_contents($url);
  // untuk mengambil tabel
  $buka  = explode('<table class="table table-striped rentability" style="margin-bottom:20px;">', $file);
  $tutup = explode('</table>', $buka[1]);
  // untuk bitcoin
  $bitcoin1 = explode('<div style="margin-top:-14px; margin-bottom:10px; font-size:0.8em; color:#999; text-align:right;">', $file);
  $bitcoin2 = explode('</div>', $bitcoin1[1]);
  // untuk spesifikasi
  $spesifikasi1 = explode('<table class="table table-striped">', $file);
  $spesifikasi2 = explode('</table>', $spesifikasi1[2]);
  // untuk  mengambil descripsi
  $description1 = explode('<p style="font-size:1.1em; border:1px dotted silver; padding:10px;">', $file);
  $description2 = explode('</p>', $description1[1]);
  // untuk ambil gambar
  $gambar1 = explode('<img ', $file);
  $gambar2 = explode('>', $gambar1[3]);

  $tabel_profit = $tutup[0];
  $bitcoin      = $bitcoin2[0];
  $spesifikasi  = $spesifikasi2[0];
  $description  = $description2[0];
  $gambar       = $gambar2[0];

  return $data = array(
    $tabel_profit,
    $bitcoin,
    $spesifikasi,
    $description,
    $gambar
  );
}

$id_alat = $_GET['id_alat'];
$sql     = "SELECT * FROM data_alat WHERE id_alat= '$id_alat'";
$query   = mysqli_query($konek, $sql);
$row     = mysqli_fetch_array($query);
$tampil = bacaHTML($row['link']);
?>

<!-- Page Wrapper -->
<div id="wrapper">
  <!-- begin:: siderbar -->
  <?php include_once 'atribut/sidebar.php'; ?>
  <!-- end:: siderbar -->

  <div id="content-wrapper" class="d-flex flex-column">
    <!-- begin:: main content -->
    <div id="content">
      <!-- begin:: topbar -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>
        <div class="row">
          <div class="col-xl-12">
            <h5 class="mt-2 font-weight-bold text-info"><b> Sistem Pendukung Keputusan Pemilihan Alat Mining
                Cryptocurrency </b></h5>
          </div>
        </div>
        <ul class="navbar-nav ml-auto">
          <div class="topbar-divider d-none d-sm-block"></div>
          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
            <a class="btn btn-primary btn-user btn-block" href="../logout.php"> Logout </a>
          </li>
        </ul>
      </nav>
      <!-- end:: topbar -->

      <!-- begin:: content -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">

              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Detail <?= $row['alatmining'] ?> </b></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">

                <div class="row">
                  <div class="col-lg-6">
                    <!-- <h2>Pictures</h2> -->
                    <img <?= $tampil[4]; ?>>
                  </div>
                  <div class="col-lg-6">
                    <h2>Profitability</h2>
                    <table class="table table-striped" cellspacing="0">
                      <?= $tampil[0]; ?>
                    </table>
                    <?= $tampil[1]; ?>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6"><br>
                    <h2>Description</h2>
                    <?= $tampil[3]; ?>
                  </div>
                  <div class="col-lg-6"><br>
                    <h2>Specifications</h2>
                    <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                      <?= $tampil[2]; ?>
                    </table>
                  </div>
                </div>

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