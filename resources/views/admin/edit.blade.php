<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Dento - Dentist & Medical HTML Template">
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
        trix-toolbar [data-trix-button-group="file-tools"] {
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
    <div class="breadcumb-area bg-img bg-gradient-overlay">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h2 class="title">Edit Aspirasi</h2>
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
                        <div class="section-heading text-center">
                            <div>
                                <h2>Edit Aspirasi</h2>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="col-lg-8">
        <form class="ml-30 mb-100" method="POST" action="/admin/{{ $aspirasi->id }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="aspirasi" class="form-label">Aspirasi:</label>
                <textarea class="form-control" id="aspirasi" name="aspirasi" rows="3">{{ $aspirasi->aspirasi }}</textarea>
            </div>

            <div class="mb-3">
                <label for="pihak" class="form-label">Pihak Yang Dituju:</label>
                <input type="text" class="form-control" id="pihak" name="pihak" value="{{ old('pihak', $aspirasi->pihak) }}">
            </div>

            <div class="mb-3">
                <label for="tanggapan" class="form-label">Tanggapan:</label>
                <input type="text" class="form-control" id="tanggapan" name="tanggapan" value="{{ old('tanggapan', $aspirasi->tanggapan) }}">
            </div>

            <div class="mb-3">
                <label for="progres" class="form-label">Progres:</label>
                <select class="form-select" id="progres" name="progres">
                    <option value="aspirasi sedang ditampung" {{ $aspirasi->progres == 'aspirasi anda sedang ditampung' ? 'selected' : '' }}>Aspirasi Anda Sedang Ditampung</option>
                    <option value="aspirasi anda sedang direkap" {{ $aspirasi->progres == 'aspirasi anda sedang direkap' ? 'selected' : '' }}>Aspirasi Anda Sedang Direkap</option>
                    <option value="aspirasi anda sedang disalurkan kepada pihak yang dituju" {{ $aspirasi->progres == 'aspirasi anda sedang disalurkan kepada pihak yang dituju' ? 'selected' : '' }}>Aspirasi Anda Sedang Disalurkan Kepada Pihak yang Dituju</option>
                    <option value="aspirasi selesai" {{ $aspirasi->progres == 'aspirasi selesai' ? 'selected' : '' }}>Aspirasi Selesai</option>
                    <option value="progres dihentikan, aspirasi anda tidak dapat diproses" {{ $aspirasi->progres == 'progres dihentikan, aspirasi anda tidak dapat diproses' ? 'selected' : '' }}>Progres Dihentikan, Aspirasi Anda Tidak Dapat Diproses</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan:</label>
                <select class="form-select" id="keterangan" name="keterangan">
                    <option value="tidak ada" {{ $aspirasi->keterangan == 'tidak ada' ? 'selected' : '' }}>Tidak Ada</option>
                    <option value="aspirasi anda tidak sesuai ketentuan" {{ $aspirasi->keterangan == 'aspirasi anda tidak sesuai ketentuan' ? 'selected' : '' }}>Aspirasi Anda Tidak Sesuai ketentuan</option>
                    <option value="aspirasi anda akan ditanggapi pada acara forasi" {{ $aspirasi->keterangan == 'aspirasi anda akan ditanggapi pada acara forasi' ? 'selected' : '' }}>Aspirasi Anda Akan Ditanggapi Pada Acara FORASI</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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