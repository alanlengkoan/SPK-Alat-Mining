<?php session_start(); ?>
<?php include_once '../db/koneksi.php'; ?>
<?php 
if (empty($_SESSION['username'])) {
  echo "<script>alert('Anda Harus Masuk Dahulu !');</script>";
  echo "<script>window.location=(href='../index.php')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard | Admin</title>

    <link href="../assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- cdn font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- cdn fontawesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body id="page-top">