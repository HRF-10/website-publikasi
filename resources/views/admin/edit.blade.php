@extends('admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Admin Page</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi"><use xlink:href="#calendar3"/></svg>
            This week
          </button>
        </div>
    </div>

    <div class="container mt-5">
        <h2>Edit Aspirasi</h2>
        <form method="POST" action="/admin/{{ $aspirasi->id }}">
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

    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
@endsection