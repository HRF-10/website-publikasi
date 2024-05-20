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

 @include('partials.header')

  <div class="breadcumb-area bg-img bg-gradient-overlay">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">FORASI</h2>
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
              <li class="breadcrumb-item" aria-current="page">Askaduta 2024</li>
              <li class="breadcrumb-item active" aria-current="page">Rekapitulasi FORASI</li>
              <li class="breadcrumb-item dropdown">
                  <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Pihak
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#wks1">WKS 1 Kurikulum</a>
                      <a class="dropdown-item" href="#wks2">WKS 2 Kesiswaan</a>
                      <a class="dropdown-item" href="#wks3">WKS 3 Sarana dan Prasarana</a>
                      <a class="dropdown-item" href="#wks4">WKS 4 Humas</a>
                      <a class="dropdown-item" href="#wks5">WKS 5 Sumber Daya Manusia</a>
                      <a class="dropdown-item" href="#ktu">Kepala Tata Usaha</a>
                      <a class="dropdown-item" href="#spmi">Satuan Penjamin Mutu Internal (SPMI)</a>
                      <a class="dropdown-item" href="#mpk">MPK</a>
                      <a class="dropdown-item" href="#osis">OSIS</a>
                      <a class="dropdown-item" href="#daws">DAWS</a>
                      <a class="dropdown-item" href="#wps">WPS</a>
                      <a class="dropdown-item" href="#pks">Patroli Keamanan Sekolah</a>
                      <a class="dropdown-item" href="#bkk">BKK</a>
                  </div>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <section class="dento-about-us-area section-padding-100-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="about-us-content mb-30 text-center">
            <div class="section-heading text-center">
              @foreach ($respons as $respon)
                @if ($respon->id == 13)
                  <div>
                      <h2>{{ $respon->title }}</h2>
                      <div class="line"></div>
                  </div>
                @endif
              @endforeach
            </div>
            @foreach ($respons as $respon)
              @if ($respon->id == 13)
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

  <div class="section-heading mt-30 ml-50" id="wks1">
    @foreach ($respons as $respon)
      @if ($respon->id == 1)
        <div>
          <h6>{{ $respon->title }}</h6>
          <div class="line"></div>
        </div>
      @endif
    @endforeach
  </div>

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
                  @foreach($wks1_data as $data)
                  <tr>
                    @if($data->id == 6)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 7)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 8)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 9)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 10)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 11)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 12)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 13)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
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

  <div class="section-heading mt-30 ml-50" id="wks2">
    @foreach ($respons as $respon)
      @if ($respon->id == 2)
        <div>
          <h6>{{ $respon->title }}</h6>
          <div class="line"></div>
        </div>
      @endif
    @endforeach
  </div>

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
                    @if($data->id == 6)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 7)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 8)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
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

  <div class="section-heading mt-30 ml-50" id="wks3">
    @foreach ($respons as $respon)
      @if ($respon->id == 3)
        <div>
          <h6>{{ $respon->title }}</h6>
          <div class="line"></div>
        </div>
      @endif
    @endforeach
  </div>

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
                  @foreach($wks3_data as $data)
                  <tr>
                    @if($data->id == 8)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 9)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 10)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 11)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 12)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 13)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 14)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 15)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 16)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 17)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 18)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 19)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 20)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
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

  <div class="section-heading mt-30 ml-50" id="wks4">
    @foreach ($respons as $respon)
      @if ($respon->id == 4)
        <div>
          <h6>{{ $respon->title }}</h6>
          <div class="line"></div>
        </div>
      @endif
    @endforeach
  </div>

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
                  @foreach($wks4_data as $data)
                  <tr>
                    @if($data->id == 3)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
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

  <div class="section-heading mt-30 ml-50" id="wks5">
    @foreach ($respons as $respon)
      @if ($respon->id == 14)
        <div>
          <h6>{{ $respon->title }}</h6>
          <div class="line"></div>
        </div>
      @endif
    @endforeach
  </div>

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
                  @foreach($wks5_data as $data)
                  <tr>
                    @if($data->id == 1)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 2)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 3)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 4)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 5)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 6)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 7)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 8)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
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

  <div class="section-heading mt-30 ml-50" id="ktu">
    @foreach ($respons as $respon)
      @if ($respon->id == 6)
        <div>
          <h6>{{ $respon->title }}</h6>
          <div class="line"></div>
        </div>
      @endif
    @endforeach
  </div>

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
                  @foreach($ktu_data as $data)
                  <tr>
                    @if($data->id == 1)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 2)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
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

  <div class="section-heading mt-30 ml-50" id="spmi">
    @foreach ($respons as $respon)
      @if ($respon->id == 15)
        <div>
          <h6>{{ $respon->title }}</h6>
          <div class="line"></div>
        </div>
      @endif
    @endforeach
  </div>

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
                  @foreach($spmi_data as $data)
                  <tr>
                    @if($data->id == 1)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
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

  <div class="section-heading mt-30 ml-50" id="mpk">
    @foreach ($respons as $respon)
      @if ($respon->id == 16)
        <div>
          <h6>{{ $respon->title }}</h6>
          <div class="line"></div>
        </div>
      @endif
    @endforeach
  </div>

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
                  @foreach($mpk_data as $data)
                  <tr>
                    @if($data->id == 1)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
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

  <div class="section-heading mt-30 ml-50" id="osis">
    @foreach ($respons as $respon)
      @if ($respon->id == 11)
        <div>
          <h6>{{ $respon->title }}</h6>
          <div class="line"></div>
        </div>
      @endif
    @endforeach
  </div>

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
                  @foreach($osis_data as $data)
                  <tr>
                    @if($data->id == 1)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
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

  <div class="section-heading mt-30 ml-50" id="daws">
    @foreach ($respons as $respon)
      @if ($respon->id == 18)
        <div>
          <h6>{{ $respon->title }}</h6>
          <div class="line"></div>
        </div>
      @endif
    @endforeach
  </div>

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
                  @foreach($dawswps_data as $data)
                  <tr>
                    @if($data->id == 1)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 2)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
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

  <div class="section-heading mt-30 ml-50" id="wps">
    @foreach ($respons as $respon)
      @if ($respon->id == 17)
        <div>
          <h6>{{ $respon->title }}</h6>
          <div class="line"></div>
        </div>
      @endif
    @endforeach
  </div>

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
                  @foreach($dawswps_data as $data)
                  <tr>
                    @if($data->id == 3)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
                      <td>{{ $data->narasumber }}</td>
                    @endif
                  </tr>
                  <tr>
                    @if($data->id == 4)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
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

  <div class="section-heading mt-30 ml-50" id="pks">
        <div>
          <h6>Patroli Keamanan Sekolah</h6>
          <div class="line"></div>
        </div>
  </div>

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
                  @foreach($ekskul_data as $data)
                  <tr>
                    @if($data->id == 1)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
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

  <div class="section-heading mt-30 ml-50" id="bkk">
        <div>
          <h6>BKK</h6>
          <div class="line"></div>
        </div>
  </div>

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
                  @foreach($bkk_data as $data)
                  <tr>
                    @if($data->id == 1)
                      <td>{{ $data->aspirasi }}</td>
                      <td>{!! $data->tanggapan !!}</td>
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