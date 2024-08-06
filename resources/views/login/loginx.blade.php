<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Dento - Dentist &amp; Medical HTML Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ $title }}</title>

  <link href="img/core-img/favicon.png" rel="icon">
  <link rel="stylesheet" href="\style2.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div id="preloader">
    <div class="preload-content">
      <div id="dento-load"></div>
    </div>
  </div>

  <div class="main-header-area">
    <div class="classy-nav-container breakpoint-off">
      <div class="container">
        <nav class="classy-navbar justify-content-between" id="dentoNav">

          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>

          <div class="classy-menu">

            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <div class="classynav">
              <ul id="nav">
                <li>E-ASKADUTA</li>
              </ul>

            </div>
          </div>

          <div class="header-image">
            <img src="/img/core-img/logo-web.png" alt="Small Logo">
          </div>
        </nav>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="dento-border clearfix"></div>
  </div>

  <section class="dento-about-us-area section-padding-100-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="about-us-content mb-30 text-center">
            <div class="section-heading text-center">
              <div>
                <h2>Please Login</h2>
                <div class="line"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="row justify-content-center">
    <div class="col-lg-8 col-10">
      @if (session('error_message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('error_message') }}
        </div>
      @endif
      <form action="{{ route('authenticate.kelasx') }}" method="POST">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control" id="name" placeholder="name" value="{{ old('name') }}" required>
          <label for="name">Nama Lengkap Siswa</label>
        </div>
        <div class="form-floating">
          <input type="text" name="kelas" class="form-control" id="kelas" placeholder="kelas" value="{{ old('kelas') }}" required>
          <label for="kelas">Kelas dan Jurusan</label>
          <small class="keterangan">Contoh: x pplg a</small>
        </div>
        <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Login</button>
        <div class="text-right mt-3 mr-3">
          <a href="/login">Kembali</a>
        </div>
      </form>
    </div>
  </div>

  <script src="/js/jquery.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/dento.bundle.js"></script>
  <script src="/js/default-assets/active.js"></script>

</body>

</html>