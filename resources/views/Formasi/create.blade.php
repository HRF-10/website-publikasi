<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Dento - Dentist &amp; Medical HTML Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>{{ $title }}</title>

    <link href="img/core-img/favicon.png" rel="icon">
    <link rel="stylesheet" href="\style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
        }
    </style>

</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="preload-content">
      <div id="dento-load"></div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
 @include('partials.header')
  <!-- ***** Header Area End ***** -->

  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-gradient-overlay">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">Form Aspirasi</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Respon Aspirasi</li>
              <li class="breadcrumb-item active" aria-current="page">Form Aspirasi</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <section class="dento-about-us-area section-padding-100-0">
    <div class="container">
      <div class="row align-items-center">
        <!-- About Content -->
        <div class="col-12">
          <div class="about-us-content mb-30 text-center">
            <!-- Section Heading -->
            <div class="section-heading text-center">
                  <div>
                      <h2>Form Aspirasi</h2>
                      <div class="line"></div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="col-lg-8">
    <form class="ml-30 mb-100" method="POST" action="/aspirasisaya">
        @csrf
        <div class="mb-3">
            <label for="pihak" class="form-label">Pihak yang dituju</label>
            <input type="text" class="form-control @error('pihak') is-invalid @enderror" id="pihak" name="pihak" required autofocus value="{{ old('pihak') }}">
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            @error('pihak')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="aspirasi" class="form-label">Aspirasi</label>
            @error('aspirasi')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="aspirasi" type="hidden" name="aspirasi" required value="{{ old('aspirasi') }}">
            <trix-editor input="aspirasi"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <div class="container">
    <div class="dento-border clearfix"></div>
  </div>

  <!-- ***** Footer Area Start ***** -->
  @include('partials.footer')
  <!-- ***** Footer Area End ***** -->

  <!-- ******* All JS ******* -->
  <!-- jQuery js -->
  <script src="/js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="/js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="/js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="/js/dento.bundle.js"></script>
  <!-- Active js -->
  <script src="/js/default-assets/active.js"></script>

  <script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
  </script>

</body>

</html>