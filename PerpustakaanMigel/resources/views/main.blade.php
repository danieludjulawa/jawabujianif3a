<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Toko Bangunan</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <script src='main.js'></script>
</head>

<body>
    <h1 class="text-center">
        Perpustakaan Migel
    </h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar navbar-dark bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/">Peminjaman</a>
                    <a class="nav-link" href="/bukuview">Buku</a>
                    <a class="nav-link" href="/anggotaview">Anggota</a>
                    <a class="nav-link" href="/detailview">Detail</a>
                </div>
            </div>
        </div>
    </nav>
    @if(session()->has('message'))
    <div class="alert alert-success">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        {{ session('message') }}
    </div>
    @endif
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="mt-4">
                <h2>Transaksi</h2>
            </div>
            <div class="mt-4">



            </div>
        </div>


        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="formbold-main-wrapper">
            <div class="formbold-main-wrapper">
                <div class="formbold-form-wrapper">
                    <form action="{{Route('confirm')}}" method="POST">
                        @csrf
                        <div class="formbold-input-group mb-3">
                            <label class="formbold-form-label" for="buku">Buku yang dipinjam:</label>
                            <select class="formbold-form-select" name="buku" id="buku">
                                @forelse ($bukus as $buku)
                                <option value="{{ $buku->idbuku }}">{{ $buku->judul_buku }}</option>
                                @empty
                                <option value="">Tidak ada buku tersedia</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="formbold-input-group mb-3">
                            <label class="formbold-form-label" for="anggota">Anggota yang meminjam:</label>
                            <select class="formbold-form-select" name="anggota" id="anggota">
                                @forelse ($anggotas as $anggota)
                                <option value="{{ $anggota->idanggota }}">{{ $anggota->nama_anggota }}</option>
                                @empty
                                <option value="">Tidak ada buku tersedia</option>
                                @endforelse
                            </select>
                        </div>
                        

                        <div class="formbold-input-group">
                            <label for="tgl_kembali" class="formbold-form-label"> Tanggal Pengembalian: </label>
                            <input
                                type="date"
                                name="tgl_kembali"
                                id="tgl_kembali"
                                placeholder=""
                                class="formbold-form-input" />
                        </div>

                        
                        <button type="submit" class="btn btn-primary btn-block">Pinjam</button>
                    </form>
                </div>
            </div>
        </div>


    </div>




</body>

</html>