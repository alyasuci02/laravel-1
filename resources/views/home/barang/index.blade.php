<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Data Barang</h1>
    <br>
    <a href="/barang/tambah">Tambah Barang</a>
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
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">ID Jenis</th>
                    <th scope="col">Harga Beli</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->gambar }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->id_jenis }}</td>
                    <td>{{ $barang->harga_beli }}</td>
                    <td>{{ $barang->harga_jual }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td><a href="/barang/{{$barang->id}}/show">Edit</a>
                        <a href="">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>