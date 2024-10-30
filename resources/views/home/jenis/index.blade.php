<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Data Jenis</h1>
    <br>
    <a href="/jenis/tambah">Tambah Jenis</a>
    <div
        class="table-responsive"
    >
        <table 
        border="3"
        class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Jenis</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jenis as $jenis)
                <tr>
                    <td>{{ $jenis->id }}</td>
                    <td>{{ $jenis->nama_jenis }}</td>
                    </td>
                    <td><a href="/jenis/{{$jenis->id}}/show">Edit</a>
                    <a href="">Hapus</a>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>