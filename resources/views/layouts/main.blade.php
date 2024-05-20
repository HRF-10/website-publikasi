<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Dento - Dentist &amp; Medical HTML Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ $title }}</title>
  
  <link href="img/core-img/favicon.png" rel="icon">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
  <div id="preloader">
    <div class="preload-content">
      <div id="dento-load"></div>
    </div>
  </div>

  @include('partials.header')

  @include('partials.prakata')

        <div class="col-12">
          <div class="about-us-content mb-50 text-center">
            <div class="section-heading text-center mt-50 wow fadeInUp" data-wow-delay="0.1s">
                  <div>
                    <h2>Tentang Kami</h2>
                    <div class="line"></div>
                  </div>
            </div>
            <div class="wow fadeInUp" data-wow-delay="0.3s">
              <p>Aspirasi SMAKADUTA adalah salah satu program kerja yang diselenggarakan oleh Musyawarah Perwakilan Kelas (MPK) SMK Negeri 2 Surakarta yang bertujuan untuk menjalin dan menjembatani aspirasi atau komunikasi dari seluruh siswa siswi di SMK Negeri 2 Surakarta kepada pihak sekolah. Kami menyediakan wadah aspirasi bernama KOPIKATA atau Kotak Aspirasi SMAKADUTA dan FORMASI atau Form Aspirasi. Selain itu, kami juga menyelenggarakan FORASI atau Forum Aspirasi Siswa.</p>
            </div>
          </div>
        </div>

  <div class="container">
    <div class="dento-border clearfix"></div>
  </div>

  @include('partials.responAspi')

  @include('partials.alur')

  @include('partials.footer')
  
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/dento.bundle.js"></script>
  <script src="js/default-assets/active.js"></script>

</body>