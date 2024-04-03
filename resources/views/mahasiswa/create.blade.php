@extends('layout.template')

@section('content')

<!-- START FORM -->
  <form action='{{ url('mahasiswa') }}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ url('mahasiswa') }}' class="btn btn-secondary">KEMBALI</a>
        <div class="mb-3 row">
            <label for="nim" class="col-sm-3 col-form-label">NIM</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name='nim' id="nim" value="{{ Session::get('nim') }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name='nama' id="nama" value="{{ Session::get('nama') }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-9">
                <input type="radio" name="gender" value="Laki-laki" {{ Session::get('gender') == 'Laki-laki' ? 'checked' : '' }}> Laki-laki</input>
                <input type="radio" name="gender" value="Perempuan" {{ Session::get('gender') == 'Perempuan' ? 'checked' : '' }}> Perempuan</input>                
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name='jurusan' id="jurusan" value="{{ Session::get('jurusan') }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->

@endsection