<?php include_once 'atribut/head.php'; ?>

<?php
$sql    = "SELECT id_listrik FROM kriterialistrik";
$carkod = mysqli_query($konek, $sql);
$datkod = mysqli_fetch_array($carkod, MYSQLI_ASSOC);
$jumdat = mysqli_num_rows($carkod);
if ($datkod) {
  $nilkod  = substr($jumdat[0], 1);
  $kode    = (int) $nilkod;
  $kode    = $jumdat + 1;
  $kodeoto = $kode;
} else {
  $kodeoto = "1";
}
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
              <h5 class="m-0 font-weight-bold text-info"> <b> Tambah Kriteria Daya Listrik </b></h5>
            </div>
            <div class="card-body">
              <form class="form" method="post">
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">ID</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="id_listrik" value="<?= $kodeoto ?>"
                      readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12"> Daya Listrik </label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="listrik" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12"> Bilangan Fuzzy </label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="fuzzy" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12"> Nilai </label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="nilai" required>
                  </div>
                </div>
                <!-- Button -->
                <input class="btn btn-success" type="submit" name="simpan" value="Simpan">
                <a href="data_kriteria.php">
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

<?php include_once 'atribut/foot.php'; ?>

<?php
if (isset($_POST['simpan'])) {
  $id_listrik   = $_POST ['id_listrik'];
  $listrik      = $_POST ['listrik'];
  $fuzzy        = $_POST ['fuzzy'];
  $nilai        = $_POST ['nilai'];

  $query = "INSERT INTO kriterialistrik (id_listrik, listrik, bilanganfuzzy, nilai) VALUES ('$id_listrik','$listrik','$fuzzy','$nilai')";
  $tambah = mysqli_query($konek, $query);
  if ($tambah === true) {
    echo "<script>alert('Kriteria Berhasil Di Tambah') </script>";
		echo "<script>window.location.href = \"data_kriteria.php\" </script>";
  }
  else {
    echo "<script>alert('Kriteria Gagal Di Tambah') </script>";
		echo "<script>window.location.href = \"data_kriteria.php\" </script>";
  }
}
 ?>