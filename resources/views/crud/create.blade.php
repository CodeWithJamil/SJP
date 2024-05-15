@extends('layout.template')
<!-- START FORM -->
@section('konten')

<form action='{{ url('SJP') }}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('SJP') }}" class="btn btn-secondary"><i class="bi bi-arrow-return-left"></i> back</a>
        <div class="col-12">
            <label for="stt" class="form-label">No. STT</label>
            <input type="text" class="form-control" id="stt" value="{{ Session::get('noSTT') }}" name="noSTT">
          </div>
        <div class="col-md-6">
          <label for="pengirim" class="form-label">Pengirim</label>
          <input type="text" class="form-control" id="pengirim" name="Pengirim" value="{{ Session::get('Pengirim') }}">
        </div>
        <div class="col-md-6">
          <label for="penerima" class="form-label">Penerima</label>
          <input type="text" class="form-control" id="penerima" name="Penerima" value="{{ Session::get('Penerima') }}">
        </div>
        <div class="col-12">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="Alamat" value="{{ Session::get('Alamat') }}">
        </div>
        <div class="col-12">
          <label for="barang" class="form-label">Nama Barang</label>
          <input type="text" class="form-control" id="barang" name="Barang" value="{{ Session::get('Barang') }}">
        </div>
        <div class="col-12">
          <label for="koli" class="form-label">Koli</label>
          <input type="number" class="form-control" id="koli" name="Koli" value="{{ Session::get('Koli') }}">
        </div>
        <div class="col-12">
            <label for="kg" class="form-label">KG m3</label>
            <input type="number" class="form-control" id="kg" name="Kgm" value="{{ Session::get('Kgm') }}">
          </div>
        <div class="col-12">
            <label for="vol" class="form-label">Volume</label>
        <input type="number" class="form-control" id="vol" name="Volume" value="{{ Session::get('Volume') }}">
        </div>
        <div class="col-12">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="Jumlah" value="{{ Session::get('Jumlah') }}">
        </div>
        <div class="col-12">
            <label for="ket" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="ket" name="Ket" value="{{ Session::get('Ket') }}">
          </div>
        <div class="col-md-6">
            <br>
          <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </div>
</form>
@endsection
    <!-- AKHIR FORM -->
