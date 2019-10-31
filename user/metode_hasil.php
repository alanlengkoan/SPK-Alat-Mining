<?php
//-- query untuk mendapatkan semua data kriteria di tabel moo_kriteria
$sql = 'SELECT * FROM moo_kriteria';
$result = $konek->query($sql);
//-- menyiapkan variable penampung berupa array
$kriteria=array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
   $kriteria[$row['id_kriteria']]=array($row['kriteria'],$row['type'],$row['bobot']);
}

//-- query untuk mendapatkan semua data kriteria di tabel moo_alternatif
$sql = 'SELECT * FROM moo_alternatif';
$result = $konek->query($sql);
//-- menyiapkan variable penampung berupa array
$alternatif=array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
   $alternatif[$row['id_alternatif']] = array(
     $row['alternatif'],
     $row['harga'],
     $row['kecepatan'],
     $row['listrik'],
     $row['keuntungan'],
   );
}

//-- query untuk mendapatkan semua data sample penilaian di tabel moo_nilai
$sql = 'SELECT * FROM moo_nilai ORDER BY id_alternatif, id_kriteria';
$result = $konek->query($sql);
//-- menyiapkan variable penampung berupa array
$sample=array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
   //-- jika array $sample[$row['id_alternatif']] belum ada maka buat baru
   //-- $row['id_alternatif'] adalah id kandidat/alternatif
   if (!isset($sample[$row['id_alternatif']])) {
      $sample[$row['id_alternatif']] = array();
   }
   $sample[$row['id_alternatif']][$row['id_kriteria']] = $row['nilai'];
}

//-- inisialisasi nilai normalisasi dengan nilai dari $sample
$normal = $sample;
foreach($kriteria as $id_kriteria=>$k){
   //-- inisialisasi nilai pembagi tiap kriteria
   $pembagi=0;
   foreach($alternatif as $id_alternatif=>$a){
      $pembagi+=pow($sample[$id_alternatif][$id_kriteria],2);
   }
   foreach($alternatif as $id_alternatif=>$a){
      $normal[$id_alternatif][$id_kriteria]/=sqrt($pembagi);
   }
}
//-- menyiapkan variabel untuk menyimpan data yang sudah dioptimasi
$optimasi=array();
foreach($alternatif as $id_alternatif=>$a){
   $optimasi[$id_alternatif] = 0;
   foreach($kriteria as $id_kriteria => $k){
     $optimasi[$id_alternatif] += $normal[$id_alternatif][$id_kriteria] * ($k[1] == 'Benefit' ? 1 : -1) * $k[2];
   }
}
?>

<br />

<div class="container-fluid">
  <div class="col-xl-12 col-lg-8">
    <div class="card shadow mb-4">
      <div class="card-header">
        <div class="row">
          <div class="col-lg-6 col-xl-6">
            <h5 class="mt-2 font-weight-bold text-info"> <b> Pengambilan Nilai Alternatif </b></h5>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
          <thead align="center">
            <tr>
              <th>Alternatif</th>
              <?php
                  foreach ($kriteria as $key => $value) {
                  echo "<th>".$value[0]."</th>";
                }
                ?>
            </tr>
          </thead>
          <tbody align="center">
            <?php
              foreach ($sample as $key => $value) {
                echo "<tr>";
                echo "<td>".$alternatif[$key][0]."</td>";
              for ($i=1; $i <= count($value) ; $i++) {
                echo "<td>".$value[$i]."</td>";
                }
                echo "</tr>";
              }
              ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="col-xl-12 col-lg-8">
    <div class="card shadow mb-4">
      <div class="card-header">
        <div class="row">
          <div class="col-lg-6 col-xl-6">
            <h5 class="mt-2 font-weight-bold text-info"> <b> Membuat Matriks Normalisasi </b></h5>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
          <thead align="center">
            <tr>
              <th>Alternatif</th>
              <?php
                  foreach ($kriteria as $key => $value) {
                  echo "<th>".$value[0]."</th>";
                }
                ?>
            </tr>
          </thead>
          <tbody align="center">
            <?php
              foreach ($normal as $key => $value) {
                echo "<tr>";
                echo "<td>".$alternatif[$key][0]."</td>";
              for ($i=1; $i <= count($value) ; $i++) {
                echo "<td>".$value[$i]."</td>";
                }
                echo "</tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="col-xl-12 col-lg-8">
    <div class="card shadow mb-4">
      <div class="card-header">
        <div class="row">
          <div class="col-lg-6 col-xl-6">
            <h5 class="mt-2 font-weight-bold text-info"> <b> Menghitung Nilai Optimasi </b></h5>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
          <thead align="center">
            <tr>
              <th>Alternatif</th>
              <th>Nilai Optimasi</th>
            </tr>
          </thead>
          <tbody align="center">
            <?php
              foreach ($optimasi as $key => $value) {
                echo "<tr>";
                echo "<td>".$alternatif[$key][0]."</td>";
                echo "<td>".$value."</td>";
                echo "</tr>";
              }
              ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="col-xl-12 col-lg-8">
    <div class="card shadow mb-4">
      <div class="card-header">
        <div class="row">
          <div class="col-lg-6 col-xl-6">
            <h5 class="mt-2 font-weight-bold text-info"> <b> Hasil Rekomendasi </b></h5>
          </div>
        </div>
      </div>
      <div class="card-body">
        <?php
        arsort($optimasi);
        $index = key($optimasi);
        $hasil_alternatif = empty($alternatif[$index][0]) ? 'Belum ada!' : $alternatif[$index][0];
        $hasil_optimasi = empty($optimasi[$index]) ? 'Belum ada!' : $optimasi[$index];

        echo "Hasilnya adalah alternatif <b>".$hasil_alternatif."</b> ";
        echo "dengan nilai optimasi <b>".$hasil_optimasi."</b> yang terpilih";
        ?>
      </div>
    </div>
  </div>
</div>