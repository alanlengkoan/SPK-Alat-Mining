<?php
include_once "koneksi.php";
$alat_mining = $_GET['query'];
$sql = "SELECT * from data_alat WHERE kecepatan LIKE '%".$alat_mining."%' OR harga LIKE '%".$alat_mining."%' OR listrik LIKE '%".$alat_mining."%' OR keuntungan LIKE '%".$alat_mining."%' ORDER BY id_alat ASC";
$query = $konek->query($sql);
$result = $query->fetch_all(MYSQLI_ASSOC);

foreach($result as $data) {
    $response['suggestions'][] = [
        'value'         => $data['alatmining'],
        'id_alternatif' => $data['id_alat'],
        'alatmining'    => $data['alatmining'],
        'harga'         => $data['harga'],
        'kecepatan'     => $data['kecepatan'],
        'listrik'       => $data['listrik'],
        'keuntungan'    => $data['keuntungan'],
    ];
}

echo json_encode($response);
