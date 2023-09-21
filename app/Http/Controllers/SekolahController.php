<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sekolah;

class SekolahController extends Controller

{
   public function index() {
        return view('sekolahs.index', [
            'sekolahs' => sekolah::get()
        ]);
    }

     public function tambah() 
     {
        return view('sekolahs.tambah');

    }


    public function store(Request $request)
    {
        $sekolah = new Sekolah();

        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->alamat = $request->alamat;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->jumlah_guru = $request->jumlah_guru;

        $sekolah->save();

        return redirect()->back();
    }

public function edit($id)
 {
    $sekolahs = sekolah::find($id);

    return view('sekolahs.edit', [

        'sekolahs' => $sekolahs,
    ]);

}

public function update(Request $request, $id)
{
    $sekolahs = sekolah::find($id);

    $sekolahs->nama_sekolah =$request->nama_sekolah;
    $sekolahs->alamat = $request->alamat;
    $sekolahs->jurusan = $request->jurusan;
    $sekolahs->jumlah_guru = $request->jumlah_guru;
 
    $sekolahs->save();

    return redirect()->route('sekolahs.index');

}
   

public function destroy($id)
   {
$sekolahs = sekolah::find($id);
$sekolahs->delete();
return redirect()->route('sekolahs.index');
}

}