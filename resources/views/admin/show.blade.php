@extends('admin.layouts.main')

@section('container')
    <div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1><div class="mb-3 mt-5 text-center">Aspirasi Saya</div></h1>

                <h5><div class="mt-5">Aspirasi Anda:</div></h5>

                <p class="my-3 fs-5 mb-5">
                    {{ $aspirasi->aspirasi }}
                </p>

                <h5><div class="mt-5">Pihak yang ditujukan:</div></h5>

                <p class="my-3 fs-5 mb-5">
                    {{ $aspirasi->pihak }}
                </p>

                <h5><div class="mt-5">Tanggapan:</div></h5>

                <p class="my-3 fs-5 mb-5">
                    {{ $aspirasi->tanggapan }}
                </p>

                <h5><div class="mt-5">Progres Aspirasi:</div></h5>

                <p class="my-3 fs-5 mb-5">
                    {{ $aspirasi->progres }}
                </p>

                <h5><div class="mt-5">Keterangan:</div></h5>

                <p class="my-3 fs-5 mb-5">
                    {{ $aspirasi->keterangan }}
                </p>

                <p class="text-muted">Updated: {{ $aspirasi->updated_at->diffForHumans() }}</p>

                <a href="/aspirasisaya" class="d-block mt-3">Kembali</a>
            </div>
        </div>    
    </div>
@endsection