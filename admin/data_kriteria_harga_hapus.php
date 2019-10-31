<?php
session_start();
include_once '../db/koneksi.php';

$id_harga   = $_GET['id_harga'];
$sql        = "DELETE FROM kriteriaharga WHERE id_harga = '$id_harga' ";
$query      = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
