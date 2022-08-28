<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="css1.css">

    <!-- My Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>Halaman Index</title>
  </head>

  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent text-light fixed-top">
      <div class="container-fluid">
      <a class="navbar-brand">Diamond Language Courses</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="  navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="gallery.php">Our Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="daftarpeserta.php">List of Participants</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <!-- AKHIR NAVBAR -->

    <!-- JUMBOTRON -->
    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="animate__animated animate__flipInX display-4" style="color:#59ffee;">
          <p class="fst-italic">Welcome to</p>
          <p class="fw-bold">DIAMOND LANGUAGE COURSES</p>
        </h1>
        <p class="lead fw-bold text-light fst-italic">
          <i class="bi bi-geo-alt-fill text-danger"></i> Jalan Mahendradata Gg. Berlian No. 10 Denpasar, Bali.
          <br>
          <i class="bi bi-globe text-primary"></i> www.diamondlanguage.com
          <br>
          <i class="bi bi-whatsapp text-success"></i> Whatsapp 0812 3456 7890
        </p>
        <a class="btn btn-primary btn-lg" href="form.php" role="button">Daftar Bersama Kami</a>
      </div>
    </section>
    <!-- AKHIR JUMBOTRON -->

    <!-- FOOTER -->
    <footer class="text-light fw-bold text-center" style="color:#fa8b3c">
      <p>
        © <?php echo date('Y'); ?> Diamond Language Courses. All Rights Reserved.
      </p>
    </footer>
    <!-- AKHIR FOOTER -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>