<?php
session_start();
include_once '../db/koneksi.php';

$id_kecepatan  = $_GET['id_kecepatan'];
$sql           = "DELETE FROM kriteriakecepatan WHERE id_kecepatan = '$id_kecepatan' ";
$query         = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
