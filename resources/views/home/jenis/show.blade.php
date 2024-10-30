<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Edit Data Jenis</h1>
    <br>
    <from action="/jenis/simpan" method="post">
        @csrf
        </div>
        <div>
        <label for="" class="from-label">Nama_Jenis</label>
            <input
                type="text"
                class="form-control"
                name="nama_jenis"
                id=""
                value="{{ $jenis->nama_jenis }}"
                aria-decsribedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text-muted">Help text</small>
        </div>
       
        <button type="submit">Simpan</button>
     </form>
</body>
</html>