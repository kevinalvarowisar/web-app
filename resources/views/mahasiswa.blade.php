
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h2>DAFTAR MAHASISWA</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Gender</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs['nama'] }}</td>
                    <td>{{ $mhs['alamat'] }}</td>
                    <td>{{ $mhs['gender'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
