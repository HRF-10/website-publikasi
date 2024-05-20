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
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
          <h2 class="title">ASKADUTA 2024</h2>
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
              <li class="breadcrumb-item active" aria-current="page">Respon Aspirasi 2024</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <section class="dento-about-us-area section-padding-100-0">
    <div class="container">
      <div class="row align-items-center">
        <!-- About Content -->
        <div class="col-12">
          <div class="about-us-content mb-30 text-center">
            <!-- Section Heading -->
            <div class="section-heading text-center wow fadeInUp" data-wow-delay="0.1s">
              @foreach ($abouts as $about)
                @if ($about->id == 2)
                  <div>
                      <h2>{{ $about->title }}</h2>
                      <div class="line"></div>
                  </div>
                @endif
              @endforeach
            </div>
            @foreach ($abouts as $about)
              @if ($about->id == 2)
                <article class="wow fadeInUp" data-wow-delay="0.3s">
                  <p>{{ $about->body }}</p>
                </article>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  
  @if ($respons->count())
      <section class="dento-about-us-area section-padding-100-0">
          <div class="container">
              <div class="row align-items-center justify-content-center">
                  <div class="col-12">
                      <div class="about-us-content mb-50 text-center d-flex flex-wrap justify-content-center wow fadeInUp" data-wow-delay="0.5s">
                          @foreach ($respons as $key => $respon)
                              <div class="card ml-30 mb-50 @if(!$loop->last) mr-3 @endif" style="width: 28rem;">
                                  <div class="card-body">
                                      <h5 class="card-title">{{ $respon->title }}</h5>
                                      <h6 class="card-text">{{ $respon->tahun }}</h5>
                                      <p class="card-text">{{ $respon->excerpt }}</p>
                                      <a href="{{ route('detail_respon', ['id' => $respon->id]) }}" class="btn btn-primary">Lihat Respon</a>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                  </div>
              </div>
          </div>
      </section>
  @else
      <p class="text-center fs-4">No Post Found.</p>
  @endif

  <div class="d-flex justify-content-end mb-30 mr-30">
    {{ $respons->links() }}
  </div>

  <div class="container">
    <div class="dento-border clearfix"></div>
  </div>

  <!-- ***** Footer Area Start ***** -->
  @include('partials.footer')
  <!-- ***** Footer Area End ***** -->

  <!-- ******* All JS ******* -->
  <!-- jQuery js -->
  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="js/dento.bundle.js"></script>
  <!-- Active js -->
  <script src="js/default-assets/active.js"></script>

</body>

</html>