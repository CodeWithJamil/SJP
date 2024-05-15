@extends('layout.template')
<!-- START DATA -->
        @section('konten')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('home') }}" class="btn btn-secondary"><i class="bi bi-arrow-return-left"></i> back</a>
            <div class="col-12">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('SJP') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit"><i class="bi bi-search"></i></button>
                  </form>
                </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url('SJP/create') }}' class="btn btn-primary">+ Tambah Data</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-1">No. STT</th>
                            <th class="col-md-1">Pengirim</th>
                            <th class="col-md-1">Penerima</th>
                            <th class="col-md-1">Alamat</th>
                            <th class="col-md-1">Barang</th>
                            <th class="col-md-1">Koli</th>
                            <th class="col-md-1">KG/m3</th>
                            <th class="col-md-1">Volume</th>
                            <th class="col-md-1">Jumlah</th>
                            <th class="col-md-1">Keterangan</th>
                            <th class="col-md-1">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem() ?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->noSTT }}</td>
                            <td>{{ $item->Pengirim }}</td>
                            <td>{{ $item->Penerima }}</td>
                            <td>{{ $item->Alamat }}</td>
                            <td>{{ $item->Barang }}</td>
                            <td>{{ $item->Koli }}</td>
                            <td>{{ $item->Kgm }}</td>
                            <td>{{ $item->Volume }}</td>
                            <td>{{ $item->Jumlah }}</td>
                            <td>{{ $item->Ket }}</td>
                            <td>
                                <a href='{{ url('SJP/'.$item->noSTT.'/edit') }}' class="btn btn-warning btn-sm"><i class="bi bi-pen" style="color: white"></i></a>
                                <form onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline" action="{{ url('SJP/'.$item->noSTT) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></</button>
                                </form>
                            </td>
                        </tr>
                        <?php $i++ ?>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->withQueryString()->links() }}
          </div>
        @endsection
          <!-- AKHIR DATA -->
