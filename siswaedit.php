<?php
require 'koneksi.php';

$id = $_GET["id"];

$edis = query("SELECT * FROM siswa WHERE id = $id")[0];

if (isset($_POST["bedits"])) {

  if (editsiswa($_POST) > 0) {
    echo "<script>
                        alert ('Data siswa Berhasil Diubah!');
                        document.location.href = 'siswa.php';
                </script>";
  } else {
    echo "<script>
                    alert ('Data siswa Gagal Diubah!');
                    document.location.href = 'siswa.php';
                </script>";
  };
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Siswa</title>

  <link rel="stylesheet" href="style/siswa.css?v=<?php echo time(); ?>">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light fixed-top" id="neubar">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="../sekolah esemka project/img/logo.png" height="45" /><b> SEKOLAH ESEMKA</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2" aria-current="page" href="index.php"><i class="bi bi-house-door-fill"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 active" href="siswa.php"> <i class="bi bi-people"></i> Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="guru.php"><i class="bi bi-people-fill"></i> Guru</a>
          </li>
          <li class="nav-item">
          <li><a class="nav-link mx-2" href="logout.php"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
          </li>
        </ul>
      </div>
    </div>
  </nav><br><br><br>

  <div class="" id="editsiswa" tabindex="3" aria-hidden="true" data-aos="fade-up">
    <div class="modal-dialog dialog-centered container">
      <div class="modal-content">
        <!-- Login Form -->
        <form action="" method="post" data-aos="fade-up" delay="20000">
          <div class="modal-header">
            <h5 class="modal-title">Edit data Siswa</h5>
            <a href="siswa.php"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id" class="form-control" id="id" required value="<?php echo $edis["id"]; ?>">
            <div class="mb-3">
              <label for="nama">Nama<span class="text-danger">*</span></label>
              <input type="text" name="nama" class="form-control" id="nama" required value="<?php echo $edis["nama"]; ?>">
            </div>

            <div class=" mb-3">
              <label for="nis">NIS<span class="text-danger">*</span></label>
              <input type="number" name="nis" class="form-control" id="nis" required value="<?php echo $edis["nis"]; ?>">
            </div>


            <label for="tempatlahir">Tempat tanggal Lahir<span class="text-danger">*</span></label>
            <div class=" mb-3 d-flex">
              <input type="text" name="tempatlahir" class="form-control" id="tempatlahir" required value="<?php echo $edis["tempatlahir"]; ?>">
              <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" required value="<?php echo $edis["tgl_lahir"]; ?>">
            </div>

            <div class=" mb-3">
              <label for="jeniskelamin">Jenis Kelamin<span class="text-danger">*</span></label>
              <div class="form-label-group">
                <select class="form-control" name="jeniskelamin" required value="<?php echo $edis["jeniskelamin"]; ?>">
                  <option value=" islam">Laki laki</option>
                  <option value="kristen">Perempuan</option>
                </select>
              </div>
            </div>

            <div class=" mb-3">
              <label for="agama">Agama<span class="text-danger">*</span></label>
              <div class="form-label-group">
                <select class="form-control" name="agama" required value="<?php echo $edis["agama"]; ?>">
                  <option value=" islam">Islam</option>
                  <option value="kristen">Kristen</option>
                  <option value="katolik">Katolik</option>
                  <option value="hindu">Hindu</option>
                  <option value="buddha">Buddha</option>
                  <option value="konghucu">Konghucu</option>
                </select>
              </div>
            </div>

            <div class="mb-3">
              <label for="alamat">Alamat<span class="text-danger">*</span></label>
              <input type="alamat" name="alamat" class="form-control" id="alamat" required value="<?php echo $edis["alamat"]; ?>">
            </div>
          </div>
          <div class=" modal-footer pt-4">
            <button type="submit" name="bedits" class="btn btn-primary mx-auto w-100">Edit Siswa</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer class="text-center text-white" style="background-color: #E8F6EF;">
    <!-- Grid container -->
    <div class="container pt-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="bi bi-facebook"></i></a>

        <!-- Twitter -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="bi bi-twitter"></i></a>

        <!-- Instagram -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="bi bi-instagram"></i></i></a>

        <!-- Linkedin -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="bi bi-linkedin"></i></i></a>
        <!-- Github -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="bi bi-github"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-dark" href="">DanisAdika</a>
    </div>
    <!-- Copyright -->
  </footer>

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