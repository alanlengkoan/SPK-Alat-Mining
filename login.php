<?php
session_start();
include_once 'db/koneksi.php';

if (isset($_POST['masuk'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql    = "SELECT * FROM log_admin WHERE username = '$username' AND password = '$password'";
  $query  = $konek->query($sql);
  $hasil  = $query->num_rows;
  $data   = $query->fetch_array(MYSQLI_ASSOC);

  if ($hasil == 1) {
    if ($data['password'] == $password) {
      $_SESSION ['username'] = $_POST['username'];
      $_SESSION ['password'] = $hasil['password'];
      header("location: admin/index.php"); 
    } else {
      $user_or_pass = true;
    }
  } else {
    $user_or_pass = true;
  }
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

  <title>Login | Admin</title>
  
  <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- cdn font -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- cdn fontawesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
                  </div>

                  <?php if (isset($user_or_pass)) { ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal!</strong> Maaf username atau password yang Anda masukkan salah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?php } ?>

                  <form method="post" class="user">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" placeholder="Username" required="required" />
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required="required" />
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-user btn-block" name="masuk" value="Masuk">
                    </div>
                    <a href="index.php" class="btn btn-primary btn-user btn-block">
                      Batal
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery-easing/jquery.easing.min.js"></script>
  <script src="assets/js/sb-admin-2.min.js"></script>
  <script src="assets/js/demo/datatables-demo.js"></script>
</body>
</html>
