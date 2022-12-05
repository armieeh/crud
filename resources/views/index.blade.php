<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Website-armi</title>
</head>
<body class="container" style="background-image:url('indo.png')">
    
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2 class="text-light">Daftar Anggota Pemain Timnas</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="/anggota/create">Tambah Data</a>
            </div>
        </div>
    </div>
    <table class="mt-4 table table-secondary table-striped table-bordered">
        <thead>
          <tr>  
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelahiran</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Tinggi Badan</th>
            <th scope="col">Bergabung</th>
            <th scope="col">Club</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($anggotas as $a)
                <tr>    
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $a->nama }}</td>
                    <td>{{ $a->kelahiran }}</td>    
                    <td>{{ $a->tgl_lahir }}</td>
                    <td>{{ $a->tinggi_badan }} cm</td>
                    <td>{{ $a->tgl_gabung }}</td>
                    <td>{{ $a->club }}</td>
                    <td>
                        <form action="/anggota/delete{{ $a->id }}" method="POST">
                            <a class="btn btn-primary" href="/anggota/edit/{{ $a->id }}">Edit</a>
                            @csrf
                            @method('delete')
                            <a class="btn btn-danger" href="/anggota/{{ $a->id }}delete">Hapus</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>