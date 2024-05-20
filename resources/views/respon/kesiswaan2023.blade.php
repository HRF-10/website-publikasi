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
          <h2 class="title">WKS 2 Bid. Kesiswaan</h2>
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
              <li class="breadcrumb-item active" aria-current="page">WKS 2 Bid. Kesiswaan 2023</li>
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
              @foreach ($respons as $respon)
                @if ($respon->id == 2)
                  <div>
                      <h2>{{ $respon->title }}</h2>
                      <div class="line"></div>
                  </div>
                @endif
              @endforeach
            </div>
            @foreach ($respons as $respon)
              @if ($respon->id == 2)
                <article>
                  <p>{{ $respon->body }}</p>
                </article>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="dento-pricing-table-area mt-50 section-padding-0-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="dento-price-table table-responsive">
            <table class="table table-borderless mb-0">
              <thead>
                <tr>
                    <th scope="col" class="text-center" style="text-align: center; vertical-align: middle;">Aspirasi</th>
                    <th scope="col" class="text-center" style="text-align: center; vertical-align: middle;">Tanggapan</th>
                    <th scope="col" class="text-center" style="text-align: center; vertical-align: middle;">Pihak yang Menanggapi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach($wks2_data as $data)
                  <tr>
                  <tr>
                    @if($data->id == 2)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{{ $data->tanggapan }}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 3)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{{ $data->tanggapan }}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 4)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{{ $data->tanggapan }}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 5)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{{ $data->tanggapan }}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  @endforeach
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

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

</body>

</html>