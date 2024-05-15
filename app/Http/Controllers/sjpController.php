<?php

namespace App\Http\Controllers;

use App\Models\sjp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class sjpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 10;
        if(strlen($katakunci)){
            $data = sjp::where('noSTT','like',"%$katakunci%")
            ->orWhere('Pengirim','like',"%$katakunci%")
            ->orWhere('Penerima','like',"%$katakunci%")
            ->orWhere('Alamat','like',"%$katakunci%")
            ->orWhere('Barang','like',"%$katakunci%")
            ->orWhere('Koli','like',"%$katakunci%")
            ->orWhere('Kgm','like',"%$katakunci%")
            ->orWhere('Volume','like',"%$katakunci%")
            ->orWhere('Jumlah','like',"%$katakunci%")
            ->orWhere('Ket','like',"%$katakunci%")
            ->paginate($jumlahbaris);
        } else {
            $data = sjp::orderBy('noSTT', 'desc')->paginate($jumlahbaris);
        }
        return view('crud.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('noSTT', $request->noSTT);
        Session::flash('Pengirim', $request->Pengirim);
        Session::flash('Penerima', $request->Penerima);
        Session::flash('Alamat', $request->Alamat);
        Session::flash('Barang', $request->Barang);
        Session::flash('Koli', $request->Koli);
        Session::flash('Kgm', $request->Kgm);
        Session::flash('Volume', $request->Volume);
        Session::flash('Jumlah', $request->Jumlah);
        Session::flash('Ket', $request->Ket);

        $request->validate([
            'noSTT'=>'required|numeric|unique:sjp,noSTT',
            'Pengirim'=>'required',
            'Penerima'=>'required',
            'Alamat'=>'required',
            'Barang'=>'required',
            'Koli'=>'required',
            'Kgm'=>'required',
            'Volume'=>'required',
            'Jumlah'=>'required',
        ],[
            'noSTT.required'=>'No. STT wajib diisi',
            'noSTT.numeric'=>'No. STT wajib dalam angka',
            'noSTT.unique'=>'No. STT yang diisi sudah ada di dalam database',
            'Pengirim.required'=>'Nama pengirim wajib diisi',
            'Penerima.required'=>'Nama penerima wajib diisi',
            'Alamat.required'=>'Alamat wajib diisi',
            'Barang.required'=>'Nama barang wajib diisi',
            'Koli.required'=>'Koli wajib diisi',
            'Kgm.required'=>'KG M3 wajib diisi',
            'Volume.required'=>'Volume wajib diisi',
            'Jumlah.required'=>'Jumlah wajib diisi',
        ]);
        $data = [
            'noSTT'=>$request->noSTT,
            'Pengirim'=>$request->Pengirim,
            'Penerima'=>$request->Penerima,
            'Alamat'=>$request->Alamat,
            'Barang'=>$request->Barang,
            'Koli'=>$request->Koli,
            'Kgm'=>$request->Kgm,
            'Volume'=>$request->Volume,
            'Jumlah'=>$request->Jumlah,
            'Ket'=>$request->Ket,
        ];
        sjp::create($data);
        return redirect()->to('SJP')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = sjp::where('noSTT', $id)->first();
        return view('crud.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Pengirim'=>'required',
            'Penerima'=>'required',
            'Alamat'=>'required',
            'Barang'=>'required',
            'Koli'=>'required',
            'Kgm'=>'required',
            'Volume'=>'required',
            'Jumlah'=>'required',
        ],[
            'Pengirim.required'=>'Nama pengirim wajib diisi',
            'Penerima.required'=>'Nama penerima wajib diisi',
            'Alamat.required'=>'Alamat wajib diisi',
            'Barang.required'=>'Nama barang wajib diisi',
            'Koli.required'=>'Koli wajib diisi',
            'Kgm.required'=>'KG M3 wajib diisi',
            'Volume.required'=>'Volume wajib diisi',
            'Jumlah.required'=>'Jumlah wajib diisi',
        ]);
        $data = [
            'Pengirim'=>$request->Pengirim,
            'Penerima'=>$request->Penerima,
            'Alamat'=>$request->Alamat,
            'Barang'=>$request->Barang,
            'Koli'=>$request->Koli,
            'Kgm'=>$request->Kgm,
            'Volume'=>$request->Volume,
            'Jumlah'=>$request->Jumlah,
            'Ket'=>$request->Ket,
        ];
        sjp::where('noSTT',$id)->update($data);
        return redirect()->to('SJP')->with('success', 'Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        sjp::where('noSTT', $id)->delete();
        return redirect()->to('SJP')->with('success', 'Berhasil melakukan delete data');
    }
}
