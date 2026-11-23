
@extends('layout')

@section('content')

    <h2>Data Pegawai</h2>

    <a href="{{ url('/employe/create') }}">+ Tambah Pegawai</a>

    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Gender</th>
            <th>Gaji</th>
            <th>Aksi</th>
        </tr>

        @foreach ($employes as $pegawai)
        <tr>
            <td>{{ $pegawai->id }}</td>
            <td>{{ $pegawai->nama }}</td>
            <td>{{ $pegawai->alamat }}</td>
            <td>{{ $pegawai->gender }}</td>
            <td>{{ $pegawai->gaji }}</td>
            <td>
                <a href="{{ url('/employe/' . $pegawai->id . '/edit') }}">
                    Edit
                    <form action="{{ url('/employe/' . $pegawai->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit"
        onclick="return confirm('Yakin ingin menghapus data ini?')">
        Hapus
    </button>
</form>
                </a>
            </td>
        </tr>
        @endforeach

    </table>

@endsection
