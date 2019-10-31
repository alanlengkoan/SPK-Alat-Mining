<?php include_once 'atribut/head.php'; ?>

<?php
$idlistrik = $_GET['id_listrik'];
$sql       = "SELECT * FROM kriterialistrik WHERE id_listrik = '$idlistrik'";
$query     = mysqli_query($konek, $sql);
$row       = mysqli_fetch_array($query);
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
              <h5 class="m-0 font-weight-bold text-info"> <b> Ubah Data Kriteria Daya Listrik </b></h5>
            </div>
            <div class="card-body">
              <form class="form" method="post">
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">ID Listrik</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="idlistrik" value="<?php echo $row['id_listrik']; ?>"
                      readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Daya Listrik</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="listrik" value="<?php echo $row['listrik']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Bilangan Fuzzy</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="bilfuzzy"
                      value="<?php echo $row['bilanganfuzzy']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Nilai</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="nilai" value="<?php echo $row['nilai']; ?>">
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
include ("../koneksi.php");
//proses Input
if (isset($_POST['simpan'])) {
  $idlistrik     = $_POST['idlistrik'];
  $listrik       = $_POST['listrik'];
  $bilfuzzy      = $_POST['bilfuzzy'];
  $nilai         = $_POST['nilai'];

  $query = "UPDATE kriterialistrik SET listrik = '$listrik', bilanganfuzzy = '$bilfuzzy', nilai = '$nilai' WHERE id_listrik = '$idlistrik'";
  $simpan = mysqli_query($konek, $query);
  if ($simpan === true) {
    echo "<script>alert('Kriteria Berhasil Di Ubah') </script>";
		echo "<script>window.location.href = \"data_kriteria.php\" </script>";
  }
  else {
    echo "<script>alert('Kriteria Gagal Di Ubah') </script>";
		echo "<script>window.location.href = \"data_kriteria.php\" </script>";
  }
}
 ?>