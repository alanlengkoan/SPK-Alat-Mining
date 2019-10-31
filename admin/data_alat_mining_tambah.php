<?php include_once 'atribut/head.php'; ?>

<?php
$sql    = "SELECT MAX(id_alat) AS maxid FROM data_alat";
$carkod = mysqli_query($konek, $sql);
$datkod = mysqli_fetch_array($carkod, MYSQLI_ASSOC);
if ($datkod) {
  $nilkod  = $datkod['maxid'];
  $kode    = $nilkod + 1;
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
              <h5 class="m-0 font-weight-bold text-info"> <b> Tambah Data Alat Mining </b></h5>
            </div>
            <div class="card-body">
              <form class="form" method="post" name="converter">
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">ID</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="id_alat" value="<?= $kodeoto ?>" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Alat Mining</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="alatmining" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Harga ($)</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="number" name="harga" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Kecepatan</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" step="any" type="number" name="khash" placeholder="Kh/s" oninput="khashConverter()" onChange="khashConverter()" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">MegaHash</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" step="any" type="number" name="mhash" placeholder="MH/s" oninput="mhashConverter()" onChange="mhashConverter()" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">GigaHash</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" step="any" type="number" name="ghash" placeholder="GH/s" oninput="ghashConverter()" onChange="ghashConverter()" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">TeraHash</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" step="any" type="number" name="thash" placeholder="TH/s" oninput="thashConverter()" onChange="thashConverter()" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Daya Listrik (Watt)</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="number" name="listrik" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Keuntungan/Hari ($)</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="number" name="keuntungan" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Link</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="link" required>
                  </div>
                </div>
                
                <input class="btn btn-success" type="submit" name="simpan" value="Simpan">
                <a href="data_alat_mining.php" class="btn btn-danger">Batal</a>
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

<script type="text/javascript">
  function khashConverter() {
    document.converter.mhash.value = document.converter.khash.value / 1000
    document.converter.ghash.value = document.converter.khash.value / 1000000
    document.converter.thash.value = document.converter.khash.value / 1000000000
  }

  function mhashConverter() {
    document.converter.khash.value = document.converter.mhash.value * 1000
    document.converter.ghash.value = document.converter.mhash.value / 1000
    document.converter.thash.value = document.converter.mhash.value / 1000000
  }

  function ghashConverter() {
    document.converter.khash.value = document.converter.ghash.value * 1000000
    document.converter.mhash.value = document.converter.ghash.value * 1000
    document.converter.thash.value = document.converter.ghash.value / 1000
  }

  function thashConverter() {
    document.converter.khash.value = document.converter.thash.value * 1000000000
    document.converter.mhash.value = document.converter.thash.value * 1000000
    document.converter.ghash.value = document.converter.thash.value * 1000
  }
</script>

</body>

</html>

<?php
if (isset($_POST['simpan'])) {

  $id_alat    = $_POST['id_alat'];
  $alatmining = $_POST['alatmining'];
  $harga      = $_POST['harga'];
  $kecepatan  = $_POST['khash'];
  $listrik    = $_POST['listrik'];
  $keuntungan = $_POST['keuntungan'];
  $link       = $_POST['link'];

  $sql_alat   = "SELECT * FROM data_alat WHERE alatmining = '$alatmining'";
  $query_alat = $konek->query($sql_alat);
  $cek_alat   = $query_alat->num_rows;

  if ($cek_alat > 0) {
    echo "<script>alert('Data Sudah Ada!') </script>";
    echo "<script>window.location.href = \"data_alat_mining_tambah.php\" </script>";
  } else {
    $query  = "INSERT INTO data_alat (id_alat, alatmining, harga, kecepatan, listrik, keuntungan, link) VALUES ('$id_alat', '$alatmining','$harga','$kecepatan','$listrik','$keuntungan', '$link')";
    $tambah = $konek->query($query);
    if ($tambah == true) {
      echo "<script>alert('Data Berhasil Di Tambah') </script>";
      echo "<script>window.location.href = \"data_alat_mining.php\" </script>";
    }
    else {
      echo "<script>alert('Data Gagal Di Tambah') </script>";
      echo "<script>window.location.href = \"data_alat_mining.php\" </script>";
    } 
  }
}
?>