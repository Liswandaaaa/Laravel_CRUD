@extends('home')
@section('student')

<h1>Sekolah</h1> 
<form action="/sekolahs" class="" method="post">
            @csrf

<div class="mb-3">
                              <label class="form-label">Nama Sekolah</label>
                              <input type="text" class="form-control" name="nama_sekolah" placeholder="Tulis Nama Sekolah">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Alamat</label>
                              <input type="text" class="form-control" name="alamat" placeholder="Tulis Alamat Sekolah">
                            </div>


                            <div class="mb-3">
                              <label class="form-label">Jurusan</label>
                              <input type="text" class="form-control" name="jurusan" placeholder="Tulis Nama Jurusan">
                            </div>


                            <div class="mb-3">
                              <label class="form-label">Jumlah Guru</label>
                              <input type="text" class="form-control" name="jumlah_guru" placeholder="Jumlah Guru">
                            </div>

                            <div class="mb-3">
    <input type="submit" value="Simpan" class="btn btn-primary">
</div>

                            
                            
@endsection