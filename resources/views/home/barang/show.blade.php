<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Edit Data Barang</h1>
    <br>
    <from action="/barang/simpan" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="from-label">Gambar</label>
            <input
                type="text"
                class="form-control"
                name="gambar"
                id=""
                value="{{ $barang->gambar }}"
                aria-decsribedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text-muted">Help text</small>
        </div>
        <div>class="mb-3">
        <label for="" class="from-label">Nama_Barang</label>
            <input
                type="text"
                class="form-control"
                name="nama_barang"
                id=""
                value="{{ $barang->gambar }}"
                aria-decsribedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text-muted">Help text</small>
        </div>
        <label for="" class="from-label">ID_Jenis</label>
            <input
                type="text"
                class="form-control"
                name="id_jenis"
                id=""
                value="{{ $barang->id_jenis }}"
                aria-decsribedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text-muted">Help text</small>
            </div>
        <label for="" class="from-label">Harga_Beli</label>
            <input
                type="text"
                class="form-control"
                name="harga_beli"
                id=""
                value="{{ $barang->harga_beli }}"
                aria-decsribedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text-muted">Help text</small>
            </div>
        <label for="" class="from-label">Harga_Jual</label>
            <input
                type="text"
                class="form-control"
                name="harga_jual"
                id=""
                value="{{ $barang->harga_jual }}"
                aria-decsribedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text-muted">Help text</small>
            </div>
        <label for="" class="from-label">Stok</label>
            <input
                type="text"
                class="form-control"
                name="stok"
                id=""
                value="{{ $barang->stok }}"
                aria-decsribedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text-muted">Help text</small>
        </div>
        <button type="submit">Simpan</button>
     </form>
</body>
</html>