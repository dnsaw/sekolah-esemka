<?php
session_start();

if (isset($_COOKIE['login'])) {
  if ($_COOKIE['login'] == 'true') {
    $_COOKIE['login'] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("location: index.php");
  exit;
}

include 'koneksi.php';

if (isset($_POST["login"])) {

  $email = $_POST["email"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

  if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result); {

      $_SESSION["login"] = true;

      if (isset($_POST['remember'])) {
        setcookie('login', 'true', time() + 86400);
      }

      header("location: index.php");
      exit;
    }
  }

  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link rel="stylesheet" href="style/login.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
</head>

<body>
  <div class="bg-image" style="background-image: url('img/hero-bg.png'); height: 100vh; width: 100%;">
    <div class=" global-container">

      <form class="card login-form" data-aos="fade-up" method="post">
        <div class="card-body">
          <h3 class="card-title text-center fw-bold">LOGIN</h3>
          <h5 class="card-title text-center mb-3 fst-italic text-center"><img src="../sekolah esemka project/img/logo.png" style="width: 35px;"> SEKOLAH <strong class="text-primary"> ESEMKA </strong></h5>
          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="remember">
            <label class="form-check-label" for="defaultCheck1">
              Remember me
            </label>
            <p> You don't have an account? please <a href="register.php"> Register</a></p>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-danger" type="submit" name="login">Login now</button>
          </div>
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