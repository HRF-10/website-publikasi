@extends('admin.layouts.main')

@section('container')
    <div>
        <div class="row justify-content-center mb-5">
            <div class="col-8">
                <div class="mb-3 mt-5 text-center">
                    <h1>Detail Aspirasi</h1>
                </div>

                <div class="mt-5">
                    <h5>Aspirasi Anda:</h5>
                </div>

                <div class="my-3 fs-5 mb-5">
                    <p>{{ $aspirasi->aspirasi }}</p>
                </div>

                <div class="mt-5">
                    <h5>Pihak yang ditujukan:</h5>
                </div>

                <div class="my-3 fs-5 mb-5">
                    <p>{{ $aspirasi->pihak }}</p>
                </div>

                <div class="mt-5">
                    <h5>Tanggapan:</h5>
                </div>

                <div class="my-3 fs-5 mb-5">
                    <p>{{ $aspirasi->tanggapan }}</p>
                </div>

                <div class="mt-5">
                    <h5>Progres Aspirasi:</h5>
                </div>

                <div class="my-3 fs-5 mb-5">
                    <p>{{ $aspirasi->progres }}</p>
                </div>

                <div class="mt-5">
                    <h5>Keterangan:</h5>
                </div>

                <div class="my-3 fs-5 mb-5">
                    <p>{{ $aspirasi->keterangan }}</p>
                </div>

                <a href="/admin" class="d-block mt-3 mb-5">Kembali</a>
            </div>
        </div>    
    </div>
@endsection