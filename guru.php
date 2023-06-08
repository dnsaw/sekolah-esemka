<?php
include_once 'koneksi.php';
session_start();

if (!isset($_SESSION["login"])) {
  header("location: login.php");
  exit;
}

// Add data siswa START
if (isset($_POST["add-guru"])) {

  if (add_guru($_POST) > 0) {
    echo "<script>
                      alert ('Data guru Berhasil Ditambahkan!');
                      document.location.href = 'guru.php';
              </script>";
  } else {
    echo "<script>
                  alert ('Data guru Gagal Ditambahkan!');
                  document.location.href = 'guru.php';
              </script>";
  };
}
// Add data siswa END
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Siswa</title>

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
            <a class="nav-link mx-2" href="siswa.php"> <i class="bi bi-people"></i> Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 active" href="guru.php"><i class="bi bi-people-fill"></i> Guru</a>
          </li>
          <li class="nav-item">
          <li><a class="nav-link mx-2" href="logout.php"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br>

  <div class="container-lg" data-aos="fade-down">
    <div class="table-responsive">
      <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
            <div class="col-sm-8">
              <h2>Daftar siswa <b>SEKOLAH ESEMKA</b></h2>
            </div>
            <div class="col-sm-4">
              <button type="button" class="btn btn-info add-new" data-bs-toggle="modal" data-bs-target="#addsiswa"><i class="bi bi-plus-circle-fill"></i> Add Guru</button>
            </div>
          </div>
        </div>
        <table class="table table-bordered">
          <thead>
            <tr class="text-center">
              <th>Nama</th>
              <th>NIS</th>
              <th>Tempat, Tanggal lahir</th>
              <th>Jenis Kelamin</th>
              <th>Agama</th>
              <th>Alamat</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_array($guru)) : ?>
              <tr class="text-center">
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["nig"]; ?></td>
                <td><?php echo $row["tempatlahir"];
                    echo ", ";
                    echo $row["tgl_lahir"]; ?></td>
                <td><?php echo $row["jeniskelamin"]; ?></td>
                <td><?php echo $row["agama"]; ?></td>
                <td><?php echo $row["alamat"]; ?></td>
                <td>
                  <a class="add" title="Add" data-toggle="tooltip"><i class="bi bi-plus-circle-fill"></i></a>
                  <a class="edit" title="Edit" name="edit" data-bs-toggle="modal" href="../sekolah esemka project/guruedit.php?id=<?= $row["id"]; ?>"><i class="bi bi-pencil-square"></i></a>
                  <a class="delete" title="Delete" name="delete" data-toggle="tooltip" href="gurudelete.php?hal=<?= $row["id"]; ?>" onclick="return confirm('Yakin Menghapus data guru tersebut?');"><i class="bi bi-trash3"></i></a>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal Form -->
  <div class="modal fade" id="addsiswa" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Login Form -->
        <form action="guru.php" method="post">
          <div class="modal-header">
            <h5 class="modal-title">Tambah data siswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="nama">Nama<span class="text-danger">*</span></label>
              <input type="text" name="nama" class="form-control" id="nama" placeholder="Input Nama Guru" required>
            </div>

            <div class="mb-3">
              <label for="nig">NIG<span class="text-danger">*</span></label>
              <input type="number" name="nig" class="form-control" id="nig" placeholder="Input NIG Guru" required>
            </div>

            <label for="tempatlahir">Tempat tanggal Lahir<span class="text-danger">*</span></label>
            <div class="mb-3 d-flex">
              <input type="text" name="tempatlahir" class="form-control" id="tempatlahir" placeholder="Input Tempat lahir Guru" required>
              <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Input Tanggal lahir Guru" required>
            </div>

            <div class="mb-3">
              <label for="jeniskelamin">Jenis Kelamin<span class="text-danger">*</span></label>
              <select class="form-control" name="jeniskelamin" required>
                <option value="None">Pilih gender Guru</option>
                <option value="Laki Laki">Laki laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="agama">Agama<span class="text-danger">*</span></label>
              <div class="form-label-group">
                <select class="form-control" name="agama" required>
                  <option value="None">Pilih agama Guru</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
              </div>
            </div>

            <div class="mb-3">
              <label for="alamat">Alamat<span class="text-danger">*</span></label>
              <textarea type="text-area" name="alamat" class="form-control" id="alamat" placeholder="Input Alamat Guru" required></textarea>
            </div>
          </div>
          <div class="modal-footer pt-4">
            <button type="submit" name="add-guru" class="btn btn-primary mx-auto w-100">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer class="text-center text-white mt-5 fixed-bottom" style="background-color: #E8F6EF;">
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