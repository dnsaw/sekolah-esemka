<?php
require 'koneksi.php';
session_start();

if (!isset($_SESSION["login"])) {
  header("location: login.php");
  exit;
}

if (isset($_POST["bkomen"])) {

  if (komen($_POST) > 0) {
    echo "<script>
                      alert ('Komentar Berhasil Ditambahkan!');
                      document.location.href = 'index.php';
              </script>";
  } else {
    echo "<script>
                  alert ('Komentar Gagal Ditambahkan!');
                  document.location.href = 'index.php';
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
  <title>Document</title>

  <link rel="stylesheet" href="style/index.css?v=<?php echo time(); ?>">

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
            <a class="nav-link mx-2 active" aria-current="page" href="index.php"><i class="bi bi-house-door-fill"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="siswa.php"> <i class="bi bi-people"></i> Siswa</a>
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
  </nav>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Welcome To</h1>
          <h2 data-aos="fade-up" data-aos-delay="400"><b>SEKOLAH ESEMKA</b>, Lets Tour<br>
          </h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Start Tour</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="../sekolah esemka project/img/smk.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>About <b>SEKOLAH ESEMKA</b></h3>
              <h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium atque veritatis harum beatae deleniti quasi,</h4>
              <p>
                Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur
                itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
              </p>
              <div class="text-center text-lg-start">
                <a href="#jurusan" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Continue</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center mb-5" data-aos="zoom-out" data-aos-delay="200">
            <img src="img/about.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <section id="jurusan" class="jurusan mb-5">

      <div class="container" data-aos="fade-up">

        <header class="section-header text-center">
          <h2>Jurusan</h2>
          <p><b>SEKOLAH ESEMKA</b></p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="jurusan">
              <div class="jurusan-img">
                <img src="img/TRANSMISI.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="jurusan-info">
                <h4>Teknik Transmisi</h4>
                <span>Lorem Ipsum</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum
                  exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="jurusan">
              <div class="jurusan-img">
                <img src="img/AKSES.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="jurusan-info">
                <h4>Teknik Jaringan Akses</h4>
                <span>Lorem Ipsum</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis.
                  Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="jurusan">
              <div class="jurusan-img">
                <img src="img/tkj.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="jurusan-info">
                <h4>Teknik Komputer Jaringan</h4>
                <span>Lorem Ipsum</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut
                  architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="jurusan">
              <div class="jurusan-img">
                <img src="img/rpl.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="jurusan-info">
                <h4>Rekayasa Perangkat Lunak</h4>
                <span>Lorem Ipsum</span>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque
                  ut possimus ipsum officia.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>

    <br><br><br><br>

    <!--Section: FAQ-->
    <section class="container" data-aos="fade-up">
      <h3 class="text-center mb-4 pb-2 text-primary fw-bold">FAQ SEKOLAH ESEMKA</h3>
      <p class="text-center mb-5">
        Pertanyaan yang sering ditanyakan
      </p>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-md-6 col-lg-4 mb-4">
          <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> A simple
            question?</h6>
          <p>
            <strong><u>Lorem!</u></strong> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolorem id dicta laudantium voluptatibus repella
          </p>
        </div>

        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
          <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> A simple
            question?</h6>
          <p>
            <strong><u>Lorem!</u></strong> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolorem id dicta laudantium voluptatibus repella
          </p>
        </div>

        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
          <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> A simple
            question?</h6>
          <p>
            <strong><u>Lorem!</u></strong> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolorem id dicta laudantium voluptatibus repella
          </p>
        </div>

        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="400">
          <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> A simple
            question?</h6>
          <p>
            <strong><u>Lorem!</u></strong> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolorem id dicta laudantium voluptatibus repella
          </p>
        </div>

        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="500">
          <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> A simple
            question?</h6>
          <p>
            <strong><u>Lorem!</u></strong> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolorem id dicta laudantium voluptatibus repella
          </p>
        </div>

        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="600">
          <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> A simple
            question?</h6>
          <p>
            <strong><u>Lorem!</u></strong> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolorem id dicta laudantium voluptatibus repella
          </p>
        </div>
      </div>
    </section>
    <!--Section: FAQ-->
    <br><br><br>

    <section style="background-color: #bdbebd;">
      <div class="container my-5 py-5 text-dark" data-aos="fade-up" data-aos-delay="600">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 col-lg-8 col-xl-6">
            <div class="card">
              <div class="card-body p-4">
                <div class="d-flex flex-start w-100">
                  <img class="rounded-circle shadow-1-strong me-3" src="../sekolah esemka project/img/logo.png" alt="avatar" width="65" height="65" />
                  <div class="w-100">
                    <h5>Add a comment</h5>
                    <form class="form-outline" method="post" action="index.php">
                      <textarea class="form-control" id="textAreaExample" name="komentar" placeholder="Berikan Komentar" rows="4"></textarea>
                      <label class="form-label" for="textAreaExample">Komentar tentang website kami</label>
                      <div class="d-flex justify-content-between ">
                        <button type="submit" name="bkomen" class="btn btn-success" onclick="return confirm('Yakin menambahkan komentar tersebut?, Jika terkirim anda tidak dapat menghapus atau mengeditnya.');">
                          Send
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Remove the container if you want to extend the Footer to full width. -->

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