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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
  <div id="preloader">
    <div class="preload-content">
      <div id="dento-load"></div>
    </div>
  </div>

 @include('partials.header')

  <div class="breadcumb-area bg-img bg-gradient-overlay">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">Tentang kami</h2>
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
              <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

  @include('partials.tentang', ['showBody' => $showBody])

  <div class="container">
    <div class="dento-border clearfix"></div>
  </div>

  @include('partials.footer')

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/dento.bundle.js"></script>
  <script src="js/default-assets/active.js"></script>

</body>

</html>