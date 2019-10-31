<?php include_once 'atribut/head.php'; ?>

<?php
$id_alat    = $_GET['id_alat'];
$sql        = "SELECT * FROM data_alat WHERE id_alat= '$id_alat'";
$query      = mysqli_query($konek, $sql);
$row        = mysqli_fetch_array($query);
?>

<!-- Page Wrapper -->
<div id="wrapper">
  <!-- begin:: siderbar -->
  <?php include_once 'atribut/sidebar.php'; ?>
  <!-- end:: siderbar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
      
      <?php include_once 'atribut/navbar.php'; ?>

      <!-- Begin Page Content -->
      <div class="container-fluid">
        <!-- <div class="row"> -->
        <div class="col-xl-12  col-lg-8">
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h5 class="m-0 font-weight-bold text-info"> <b> Ubah Data Alat Mining </b></h5>
            </div>
            <div class="card-body">
              <form class="form" method="post">
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">ID</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="id_alat" value="<?php echo $row['id_alat']; ?>"
                      readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Alat Mining</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="alatmining" value="<?php echo $row['alatmining']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Harga ($)</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="harga" value="<?php echo $row['harga']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Kecepatan (Kh/s)</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="kecepatan" value="<?php echo $row['kecepatan']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Daya Listrik (Watt)</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="listrik" value="<?php echo $row['listrik']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Keuntungan/Hari ($)</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="keuntungan" value="<?php echo $row['keuntungan']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Link</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="link" value="<?php echo $row['link']; ?>">
                  </div>
                </div>
                <!-- Button -->
                <input class="btn btn-success" type="submit" name="simpan" value="Simpan">
                <a href="data_alat_mining.php">
                  <button type="button" name="button" class="btn btn-danger">Batal</button>
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
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

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>

<?php
//proses Input
if (isset($_POST['simpan'])) {
  $id_alat    = $_POST['id_alat'];
  $alatmining = $_POST['alatmining'];
  $harga      = $_POST['harga'];
  $kecepatan  = $_POST['kecepatan'];
  $listrik    = $_POST['listrik'];
  $keuntungan = $_POST['keuntungan'];
  $link       = $_POST['link'];

  $query = "UPDATE data_alat SET alatmining = '$alatmining', harga = '$harga', kecepatan = '$kecepatan', listrik = '$listrik', keuntungan = '$keuntungan', link = '$link' WHERE id_alat = '$id_alat'";
  $simpan = $konek->query($query);
  if ($simpan === true) {
    echo "<script>alert('Data Berhasil Di Ubah') </script>";
		echo "<script>window.location.href = \"data_alat_mining.php\" </script>";
  }
  else {
    echo "<script>alert('Data Gagal Di Ubah') </script>";
		echo "<script>window.location.href = \"data_alat_mining.php\" </script>";
  }
}
 ?>