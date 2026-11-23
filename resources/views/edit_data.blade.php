
@extends('layout')

@section('content')

    <h2>Edit Data Pegawai</h2>

    <form action="{{ url('/employe/' . $pegawai->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Nama Pegawai</label><br>
            <input type="text" name="nama"
                value="{{ $pegawai->nama }}" required>
        </p>

        <p>
            <label>Alamat</label><br>
            <input type="text" name="alamat"
                value="{{ $pegawai->alamat }}" required>
        </p>

        <p>
            <label>Gender</label><br>
            <select name="gender" required>
                <option value="L" {{ $pegawai->gender == 'L' ? 'selected' : '' }}>
                    Laki-laki
                </option>
                <option value="P" {{ $pegawai->gender == 'P' ? 'selected' : '' }}>
                    Perempuan
                </option>
            </select>
        </p>

        <p>
            <label>Gaji</label><br>
            <input type="number" name="gaji"
                value="{{ $pegawai->gaji }}" required>
        </p>

        <button type="submit">Update</button>
        <a href="{{ url('/employe') }}">Kembali</a>
    </form>

@endsection
