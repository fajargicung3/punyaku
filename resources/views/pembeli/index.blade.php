<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Pembeli</title>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <div class="card-title">pembeli</div>
            <a href="{{ url('pembeli/tambah')}}" class="btn btn-success">tambah</a>

            @if(session()->has('sukses'))
                <div class="alert alert-info my-2">{{session('sukses')}}</div>
                
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>no</td>
                        <td>nama</td>
                        <td>nomor</td>
                        <td>aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item ->nama}}</td>
                    <td>{{ $item->nomor}}</td>
                    <td>
                    <a href="{{ url('pembeli/'.$item->id_pembeli)}}" class="btn btn-warning">edit</a>
                    <a href="{{ url('pembeli/hapus/'.$item->id_pembeli)}}" class="btn btn-danger">hapus</a>
                    </td>
                    </tr>

                    @empty
                    <tr>
                        <td colspan="4" class="text-center">data kosong.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>