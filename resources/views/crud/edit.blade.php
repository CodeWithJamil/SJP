@extends('layout.template')
<!-- START FORM -->
@section('konten')

<form action='{{ url('SJP/'.$data->noSTT) }}' method='post'>
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('SJP') }}" class="btn btn-secondary"><i class="bi bi-arrow-return-left"></i> back</a>
        <div class="col-12">
            <label for="stt" class="form-label">No. STT</label>
            {{ $data->noSTT }}
        </div>
        <div class="col-md-6">
          <label for="pengirim" class="form-label">Pengirim</label>
          <input type="text" class="form-control" id="pengirim" name="Pengirim" value="{{ $data->Pengirim }}">
        </div>
        <div class="col-md-6">
          <label for="penerima" class="form-label">Penerima</label>
          <input type="text" class="form-control" id="penerima" name="Penerima" value="{{ $data->Pengirim }}">
        </div>
        <div class="col-12">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="Alamat" value="{{ $data->Alamat }}">
        </div>
        <div class="col-12">
          <label for="barang" class="form-label">Nama Barang</label>
          <input type="text" class="form-control" id="barang" name="Barang" value="{{ $data->Barang }}">
        </div>
        <div class="col-12">
          <label for="koli" class="form-label">Koli</label>
          <input type="number" class="form-control" id="koli" name="Koli" value="{{ $data->Koli }}">
        </div>
        <div class="col-12">
            <label for="kg" class="form-label">KG m3</label>
            <input type="number" class="form-control" id="kg" name="Kgm" value="{{ $data->Kgm }}">
          </div>
        <div class="col-12">
            <label for="vol" class="form-label">Volume</label>
        <input type="number" class="form-control" id="vol" name="Volume" value="{{ $data->Volume }}">
        </div>
        <div class="col-12">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="Jumlah" value="{{ $data->Jumlah }}">
        </div>
        <div class="col-12">
            <label for="ket" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="ket" name="Ket" value="{{ $data->Ket }}">
          </div>
        <div class="col-md-6">
            <br>
          <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </div>
</form>
@endsection
    <!-- AKHIR FORM -->
