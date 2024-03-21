@extends('template')

@section('main')
    <h2>Edit Data Siswa</h2>
    <form action="{{ route('siswa.update', $data->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nis"></label>
            <input type="number" class="form-control" @error('nis')
                is-invalid
            @enderror name="nis" value="{{ $data->nis }}">
        </div>
        <div class="form-group">
            <label for="nama"></label>
            <input type="text" class="form-control" @error('nama')
                is-invalid
            @enderror name="nama" value="{{ $data->nama  }}">
        </div>
        <div class="form-group">
            <label for="alamat"></label>
            <input type="text" class="form-control" @error('alamat')
                is-invalid
            @enderror name="alamat" value="{{ $data->alamat  }}">
        </div>
        <div class="form-group">
            <label for="sekolah_id">Sekolah</label>
            <select class="form-control" name="sekolah_id">
                @foreach ($sekolah as $item)
                    <option value="{{$item->id}}" @selected($data->sekolah_id == $item->id)>{{$item->nama_sekolah}}</option>
                @endforeach
            </select>
        </div>
        <button type="sumbit" class="btn btn-primary">Update</button>
    </form>
@endsection