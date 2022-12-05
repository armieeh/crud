<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>create</title>
</head>
<body>
    <h1 class="container">Tambah data</h1>
    <form class="container mt-3" action="/anggota/create" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="kelahiran" class="form-label">Kelahiran</label>
            <input type="text" class="form-control" id="kelahiran" name="kelahiran">
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir">
        </div>
        <div class="mb-3">
            <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
            <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan">
        </div>
        <div class="mb-3">
            <label for="tgl_gabung" class="form-label">Tanggal Bergabung</label>
            <input type="text" class="form-control" id="tgl_gabung" name="tgl_gabung">
        </div>
        <div class="mb-3">
            
            <label for="club" class="form-label">Club</label>
            <input type="text" class="form-control" id="club" name="club">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</body>
</html>