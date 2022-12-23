@extends('admin.main') {{-- Kế thừa admin/main --}}

@section('content')
<!DOCTYPE html>
<html lang="en" light-mode="right">
  <head>
    <title>SE104.N11.KHTN</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="This project serves free and beautiful portfolio template for everyone. Anyone can showcase their work including moocs, education, projects, experience,etc. to the world."
    />

    <!--Import Google Icon Font-->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="assets/css/preloader.css" />
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Favicon -->
    <link
      id="favicon"
      rel="shortcut icon"
      href="assets/images/favicon.png"
      type="image/x-png"
    />
    <!-- Font awesome icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/jpswalsh/academicons@1/css/academicons.min.css"
    />

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-M11CMZ12Q");
    </script>
  </head>

  <body class="no-scroll-preload">
    <!-- loader -->
    <div class="loader-container">
      <div class="atom">
        <div class="electron"></div>
        <div class="electron-alpha"></div>
        <div class="electron-omega"></div>
      </div>
    </div>

    <!--Dynamic Nav Bar-->

    <!--Particles effect-->
    <div id="home">
      <section class="center">
        <div id="particles-js"></div>
      </section>
    </div>
    <center>
      <!-- Home Section -->
      <div class="text col-sm-6" style="margin-top: 140px">
        <span>SE104.N11.KHTN | Nhập môn Công nghệ Phần mềm</span>
        <br />
        Đồ án:
        <span class="header">HỆ THỐNG QUẢN LÝ NHÀ SÁCH</span>
        <div class="center">
          <div>
            <img
              src="assets/images/bookstore.png"
              alt=""
              class="rounded"
              height="200"
            />
          </div>
          <br />

          <div>
            <b>GV hướng dẫn:</b> Đỗ Thị Thanh Tuyền <br />
            <b>Sinh viên thực hiện: </b><br />
            21522282 - Lê Thị Liên <br />
            21520800 - Lê Thu Hà <br />
            21520352 - Trần Xuân Minh
          </div>
        </div>
      </div>
    </center>

    <br /><br /><br />
    <!-- Dynamic footer section -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>

    <!--JavaScript at end of body for optimized loading-->
    <script src="assets/js/app.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script src="assets/js/particle.js"></script>
  </body>
</html>
@endsection
