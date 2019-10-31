<?php
session_start();
include_once '../db/koneksi.php';

$id_keuntungan = $_GET['id_keuntungan'];
$sql           = "DELETE FROM kriteriakeuntungan WHERE id_keuntungan = '$id_keuntungan' ";
$query         = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
