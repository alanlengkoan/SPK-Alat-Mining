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
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Proses Moora </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <form method="post">
                      <input type="submit" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"> Cari Alat Mining </button>
                    </form>
                  </div>
                </div>
              </div>

              <?php include_once 'metode_hasil.php'; ?>

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

<!-- begin:: modal pencarian -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Cari Alat Mining </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- begin:: form pencarian -->
        <form method="post">
          <div>
            <div class="form-group">
              <input type="number" class="form-control" name="inpkecepatan" placeholder="Kecepatan">
            </div>
          </div>
          <div>
            <div class="form-group">
              <input type="number" class="form-control" name="inpkeuntungan" placeholder="Keuntungan">
            </div>
          </div>
          <div>
            <div class="form-group">
              <input type="number" class="form-control" name="inpharga" placeholder="Harga">
            </div>
          </div>
          <div>
            <div class="form-group">
              <input type="number" class="form-control" name="inplistrik" placeholder="Daya Listrik">
            </div>
          </div>

          <input type="submit" name="proses" value="Proses" class="btn btn-success">
        </form>
        <!-- end:: form pencarian -->

      </div>
    </div>
  </div>
</div>
<!-- end:: modal pencarian -->

<?php include_once 'atribut/foot.php'; ?>

<?php
if (isset($_POST['proses'])) { 
  $kecepatan  = $_POST['inpkecepatan'];
  $keuntungan = $_POST['inpkeuntungan'];
  $harga      = $_POST['inpharga'];
  $listrik    = $_POST['inplistrik'];

  $sql    = "SELECT * FROM data_alat ORDER BY ABS(kecepatan - '$kecepatan') AND ABS(keuntungan - '$keuntungan') AND ABS(harga - '$harga') AND ABS(listrik - '$listrik') LIMIT 10";
  $result = $konek->query($sql);
  $no     = 1;

  $data_post = [];
  while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $data_post[] = array(
      'id_alternatif' => $row['id_alat'],
      'id_alat'       => $row['id_alat'],
      'alternatif'    => $row['alatmining'],
      'kecepatan'     => $row['kecepatan'],
      'keuntungan'    => $row['keuntungan'],
      'harga'         => $row['harga'],
      'listrik'       => $row['listrik']
    );                  
  }

  $query_k = $konek->query('SELECT * FROM moo_kriteria');
  $id_kriteria = [];
  while ($row_k = $query_k->fetch_array(MYSQLI_ASSOC)) {
    $id_kriteria[] = $row_k['id_kriteria'];
  }

  foreach ($data_post as $key => $value) {

    if ($value['kecepatan'] <= 239) {
      $kecepatan_hasil = 10;
    } else if ($value['kecepatan'] <= 240) {
      $kecepatan_hasil = 20;
    } else if ($value['kecepatan'] <= 900000) {
      $kecepatan_hasil = 30;
    } else if ($value['kecepatan'] <= 815000000) {
      $kecepatan_hasil = 40;
    } else  {
      $kecepatan_hasil = 50;
    }

    if ($value['keuntungan'] <= 1) {
      $keuntungan_hasil = 10;
    } else if ($value['keuntungan'] <= 10) {
      $keuntungan_hasil = 20;
    } else if ($value['keuntungan'] <= 20) {
      $keuntungan_hasil = 30;
    } else if ($value['keuntungan'] <= 30) {
      $keuntungan_hasil = 40;
    } else {
      $keuntungan_hasil = 50;
    }

    if ($value['harga'] <= 1050) {
      $harga_hasil = 50;
    } else if ($value['harga'] <= 2080) {
      $harga_hasil = 40;
    } else if ($value['harga'] <= 3110) {
      $harga_hasil = 30;
    } else if ($value['harga'] <= 7110) {
      $harga_hasil = 20;
    } else {
      $harga_hasil = 10;
    }

    if ($value['listrik'] <= 1000) {
      $listrik_hasil = 50;
    } else if ($value['listrik'] <= 1500) {
      $listrik_hasil = 40;
    } else if ($value['listrik'] <= 2100) {
      $listrik_hasil = 30;
    } else if ($value['listrik'] <= 6400) {
      $listrik_hasil = 20;
    } else {
      $listrik_hasil = 10;
    }

    $nilai = array(
      $kecepatan_hasil,
      $keuntungan_hasil,
      $harga_hasil,
      $listrik_hasil
    );

    $sql = "INSERT INTO moo_alternatif (id_alternatif, id_alat, alternatif, kecepatan, keuntungan, harga, listrik) VALUES ('$value[id_alternatif]', '$value[id_alat]', '$value[alternatif]', '$value[kecepatan]', '$value[keuntungan]', '$value[harga]', '$value[listrik]')";
    $konek->query($sql);

    for ($i = 0; $i < count($id_kriteria); $i++) {
      $sql = "INSERT INTO moo_nilai (id_alternatif, id_kriteria, nilai) VALUES ('$value[id_alternatif]','$id_kriteria[$i]','$nilai[$i]')";
      $query = $konek->query($sql);
    }

  }

  if ($query) {
    echo "<script>alert('Berhasil !');</script>";
    echo "<script>window.location.href = \"metode_proses.php\"</script>";
  } else {
    echo "<script>alert('Gagal !');</script>";
  }               
} else if (isset($_POST['kosongkan'])) {
  
  $sql_k_moo_alternatif = "TRUNCATE TABLE moo_alternatif";
  $konek->query($sql_k_moo_alternatif);
  $sql_k_moo_nilai = "TRUNCATE TABLE moo_nilai";
  $konek->query($sql_k_moo_nilai);

  echo "<script>alert('Berhasil mengosongkan tabel!')</script>";
  echo "<script>window.location.href = \"metode_proses.php\"</script>";

}
?>