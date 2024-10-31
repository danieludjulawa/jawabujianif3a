<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menampilkan Data Pasien</title>
</head>

<body>

    <div class="container">
        <h3 class="mb-3" style="text-align:center; color: white;">DATA Pasien</h3>
        <h3 style="text-align:center; color:white">---------------------------------------------------------------</h3>



        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">NO ID</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">UMUR</th>
                    <th scope="col">JENIS KELAMIN</th>
                    <th scope="col">TANGGAL PENDAFTARAN</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($pasien as $pasiens)
                    <tr>
                        <td scope="row">{{ $pasiens->id }}</td>
                        <td>{{ $pasiens->name }}</td>
                        <td>{{ $pasiens->alamat }}</td>
                        <td>{{ $pasiens->umur }}</td>
                        <td>{{ $pasiens->jeniskelamin }}</td>
                        <td>{{ $pasiens->tanggal_daftar}}</td>
                    </tr>
                    @empty
                    <div class="alert align-dark d-line-block">TIDAK ADA DATA </div>
                    @endforelse



               
            </tbody>
        </table>
        <div>
            <a href="{{route('home')}}">Back</a>
        </div>


       
    </div>

</body>
<style>
    body{
        background: #454f4a;
    }
    table{
        color: white;
    }
    a{
        text-align: center;
            width: 100%;
            font-size: 16px;
            border-radius: 5px;
            padding: 14px 25px;
            border: none;
            font-weight: 500;
            background-color: grey;
            color: white;
            cursor: pointer;
            margin-top: 25px;
    }
</style>
</html>