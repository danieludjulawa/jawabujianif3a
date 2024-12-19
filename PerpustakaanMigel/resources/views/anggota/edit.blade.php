@extends('viewang')
@section('konten')
<h4>Edit Anggota</h4>
    <form action="{{route('anggotaupdate', $anggotas->idanggota)}}" method="POST">
    @csrf
  
        <label>Nama:</label>
        <input type="text" name="nama_anggota" value="{{$anggotas->nama_anggota}}" id="nama_anggota" class="form-control mb-2">
        <label>Alamat:</label>
        <input type="text" name="alamat" value="{{$anggotas->alamat}}" id="alamat" class="form-control mb-2">
        <label>Jurusan:</label>
        <input type="text" name="jurusan" value="{{$anggotas->jurusan}}" id="jurusan" class="form-control mb-2">
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection