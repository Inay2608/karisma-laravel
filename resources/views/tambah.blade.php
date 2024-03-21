@extends('template')

@section('main')
    <h2>Tambah Data Siswa</h2>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nis">Nis</label>
            <input type="number" class="form-control" @error('nis') is-invalid @enderror  name="nis" value="{{ old('nis') }}">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" @error('nama') is-invalid @enderror  name="nama" value="{{ old('nama') }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" @error('alamat') is-invalid @enderror name="alamat" value="{{ old('alamat') }}">
        </div>
        <button type="sumbit" class="btn btn-primary">Sumbit</button>
    </form>
@endsection