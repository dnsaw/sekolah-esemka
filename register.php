<?php
require 'koneksi.php';


error_reporting(0);

if (isset($_POST['register'])) {
  $email = $_POST['email'];
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);

  if ($password == $cpassword) {
    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO user (email, nama, username, pass)
                    VALUES ('$email', '$nama', '$username' ,'$password')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script>alert('Selamat, registrasi berhasil!, silahkan ke login untuk login')</script>";
        $email = "";
        $nama = "";
        $_POST['password'] = "";
        $_POST['cpassword'] = "";
      } else {
        echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
      }
    } else {
      echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
    }
  } else {
    echo "<script>alert('Password Tidak Sesuai')</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <link rel="stylesheet" href="style/register.css?v=<?php echo time(); ?>">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
</head>

<body>
  <div class="bg-image" style="background-image: url('../latihan_ukk/img/hero-bg.png'); height: 100vh; width: 100%;">
    <div class="global-container">

      <form class="card login-form" data-aos="fade-up" method="post">
        <div class="card-body">
          <h3 class="card-title text-center fw-bold">SIGN UP</h3>
          <h5 class="card-title text-center mb-3 fst-italic"><img src="../sekolah esemka project/img/logo.png" style="width: 35px;"> SEKOLAH <strong class="text-primary"> ESEMKA </strong></h5>
          <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input name="nama" type="text" class="form-control" id="floatingPassword" placeholder="nama" required>
            <label for="floatingPassword">Nama</label>
          </div>
          <div class="form-floating mb-3">
            <input name="username" type="text" class="form-control" id="floatingPassword" placeholder="Username" required>
            <label for="floatingPassword">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input name="pass1" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating mb-3">
            <input name="pass2" type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password" required>
            <label for="floatingPassword">Confirm password</label>
          </div>
          <p class="text-light">You already have an account, please <a href="login.php"> Login</a></p>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-danger" name="register" type="submit">Register now</button>
        </div>
    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init({
      easing: 'ease-out-back',
      duration: 1000
    });
  </script>
</body>

</html>