@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-warning text-white">
            <h4>Edit Data Mahasiswa</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" value="{{ $user->nama }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>NIM</label>
                    <input type="text" name="nim" value="{{ $user->nim }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Kelas</label>
                    <select name="kelas_id" class="form-control" required>
                        @foreach ($kelas as $k)
                            <option value="{{ $k->id }}" {{ $k->id == $user->kelas_id ? 'selected' : '' }}>
                                {{ $k->nama_kelas }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ url('/user') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
