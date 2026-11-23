
@extends('layout')

@section('content')

    <h2>Tambah Data Pegawai</h2>

    <form action="{{ url('/employe') }}" method="POST">
        @csrf

        <p>
            <label>Nama Pegawai</label><br>
            <input type="text" name="nama" required>
        </p>

        <p>
            <label>Alamat</label><br>
            <input type="text" name="alamat" required>
        </p>

        <p>
            <label>Gender</label><br>
            <select name="gender" required>
                <option value="">-- Pilih Gender --</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </p>

        <p>
            <label>Gaji</label><br>
            <input type="number" name="gaji" required>
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ url('/employe') }}">Kembali</a>
    </form>

@endsection
