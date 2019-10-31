<?php
session_start();
include_once '../db/koneksi.php';

$id_listrik   = $_GET['id_listrik'];
$sql          = "DELETE FROM kriterialistrik WHERE id_listrik = '$id_listrik' ";
$query        = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
