@extends('layout.template')

@section('content')

<!-- START FORM -->
  <form action='{{ url('mahasiswa/'.$data->nim) }}' method='post'>
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ url('mahasiswa') }}' class="btn btn-secondary">KEMBALI</a>
        <div class="mb-3 row">
            <label for="nim" class="col-sm-3 col-form-label">NIM</label>
            <div class="col-sm-9">
                {{ $data->nim }}
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name='nama' id="nama" value="{{ $data->nama }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-9">
                <input type="radio" name="gender" value="Laki-laki" {{ $data->gender == 'Laki-laki' ? 'checked' : '' }}> Laki-laki</input>
                <input type="radio" name="gender" value="Perempuan" {{ $data->gender == 'Perempuan' ? 'checked' : '' }}> Perempuan</input>                
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name='jurusan' id="jurusan" value="{{ $data->jurusan }}">
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