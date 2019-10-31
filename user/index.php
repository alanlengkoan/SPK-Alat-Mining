<?php
// fungsi untuk mengambil url data json
function UrlJson($value)
{

	// menampilkan jika ada error pada saat mengambil data
	$json_error = array (
		JSON_ERROR_DEPTH                 => 'Maksimum kedalaman JSON terlampaui',
		JSON_ERROR_STATE_MISMATCH        => 'Format JSON tidak valid',
		JSON_ERROR_CTRL_CHAR             => 'Control Character Error, Mungkin jenis encoding tidak sesuai',
		JSON_ERROR_SYNTAX                => 'Syntax error, Apakah string mengandung karakter escape?',
		JSON_ERROR_UTF8                  => 'Terdapat character non UTF-8, Mungkin jenis encoding tidak sesuai',
		JSON_ERROR_RECURSION             => 'Terdapat recursive pada nilai yang di encode',
		JSON_ERROR_INF_OR_NAN            => 'Terdapat nilai INF atau NAN pada string',
		JSON_ERROR_UNSUPPORTED_TYPE      => 'Terdapat nilai yang tidak dapat di encode',
		JSON_ERROR_INVALID_PROPERTY_NAME => 'Terdapat nama property yang tidak dapat di encode',
		JSON_ERROR_UTF16                 => 'Terdapat character non UTF-16, Mungkin jenis encoding tidak sesuai'
	);

	// untuk mengambil api youtube dengan json
	$url    = $value;
	$data   = file_get_contents($url);
	$decode = json_decode($data, true);

	// menampilkan apa bila terjadi error
	$last_error = json_last_error();
	if ($last_error == 0) {
		// print_r($decode);
	} else {
		echo $json_error[$last_error];
	}

  // mengembalikan hasil
	return $decode;

}

// fungsi untuk format rupiah
function formatDollar($angka)
{

	$hasil_rupiah = "$. ".number_format($angka, 0);
	return $hasil_rupiah;
 
}
// untuk data cryptocurrencies
$url  = UrlJson("https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?start=1&limit=500&convert=USD&CMC_PRO_API_KEY=3ee84e1e-cb04-40e4-b21c-2e8b8b2d2262");
$data = $url['data'];
?>

<?php include_once 'atribut/head.php'; ?>

<style>
  div.dataTables_wrapper
  div.dataTables_filter {
    text-align: left;
  }
</style>

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

            <!-- begin:: graph -->
            <div class="card shadow mb-4">
              <div class="card-body">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://indodax.com/chart/btcidr"></iframe>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- end:: graph -->
            
            <div class="row">
              <div class="col-lg-8">
                <!-- begin:: tabel cryptocurrencies -->
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-lg-6 col-xl-6">
                        <h5 class="mt-2 font-weight-bold text-info"> <b> Cryptocurrencies </b></h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">

                    <!-- begin:: tabel criptocurrencies -->
                    <div class="table-responsive">
                      <table class="table table-striped table-sm" id="tabel-criptocurrencies-dt">
                        <thead align="center">
                          <tr>
                            <th>Rank</th>
                            <th>Nama</th>
                            <th>Market Cap</th>
                            <th>Price</th>
                            <th>Volume (24h)</th>
                            <th>Circuling Supply</th>
                            <th>Change(24)</th>
                          </tr>
                        </thead>
                        <tbody align="center">
                          <?php foreach ($data as $key => $value) { ?>
                          <tr>
                            <td><?= $value['cmc_rank'] ?></td>
                            <td><?= $value['name'] ?></td>
                            <td><?= formatDollar($value['quote']['USD']['market_cap']) ?></td>
                            <td><?= formatDollar($value['quote']['USD']['price']) ?></td>
                            <td><?= formatDollar($value['quote']['USD']['volume_24h']) ?></td>
                            <td><?= number_format($value['circulating_supply'], 0).' '.$value['symbol'] ?></td>
                            <td>% <?= number_format($value['quote']['USD']['percent_change_24h'], 2) ?></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- begin:: tabel criptocurrencies -->

                  </div>
                </div>
                <!-- end:: tabel cryptocurrencies -->
              </div>
              <div class="col-lg-4">
                <!-- begin:: konver mining hash power -->
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-lg-6 col-xl-6">
                        <h5 class="mt-2 font-weight-bold text-info"> <b> Mining Hash Power Coverter </b></h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">

                    <form class="form" name="converter">
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12">Kecepatan</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input class="form-control" step="any" type="number" name="khash" placeholder="Kh/s"
                            oninput="khashConverter()" onChange="khashConverter()" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12">MegaHash</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input class="form-control" step="any" type="number" name="mhash" placeholder="MH/s"
                            oninput="mhashConverter()" onChange="mhashConverter()" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12">GigaHash</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input class="form-control" step="any" type="number" name="ghash" placeholder="GH/s"
                            oninput="ghashConverter()" onChange="ghashConverter()" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12">TeraHash</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input class="form-control" step="any" type="number" name="thash" placeholder="TH/s"
                            oninput="thashConverter()" onChange="thashConverter()" required>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
                <!-- end:: konver mining hash power -->
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
<script type = "text/javascript">

  var untukDatatables = function () {
    $('#tabel-criptocurrencies-dt').DataTable({
      ordering: false,
      pageLength: 100,
      lengthMenu: [100, 200, 300, 400],
      dom: "<'row'<'col-sm-6'f><'col-sm-6'p>>",
      language: {
        paginate: {
          next: '<i class="fa fa-arrow-right"></i>',
          previous: '<i class="fa fa-arrow-left"></i>',
          first: '<i class="fa fa-step-arrow-left"></i>',
          last: '<i class="fa fa-step-arrow-right"></i>'
        }
      }
    });
  }();

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
  
  // eksekusi jquery
  jQuery(document).ready(function () {
    untukDatatables;
  });
</script>