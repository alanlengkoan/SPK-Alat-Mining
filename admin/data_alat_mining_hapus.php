<?php
session_start();
include_once '../db/koneksi.php';

$id_alat   = $_GET['id_alat'];
$sql       = "DELETE FROM data_alat WHERE id_alat = '$id_alat' ";
$query     = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_alat_mining.php\" </script>";
} else {
  echo "<script>alert ('Data Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_alat_mining.php\" </script>";
}
 ?>
