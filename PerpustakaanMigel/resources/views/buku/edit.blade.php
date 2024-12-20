@extends('layoutView')
@section('konten')
<h4>Edit bukus</h4>
    <form action="{{route('bukuupdate', $bukus->idbuku)}}" method="POST">
    @csrf
    <!-- <label>ID bukus:</label>
        <input type="text" name="namabukus" value="{{$bukus->idbukus}}" id="idbukus" class="form-control mb-2"> -->
        <label>Nama Buku:</label>
        <input type="text" name="judul_buku" value="{{$bukus->judul_buku}}" id="judul_buku" class="form-control mb-2">
        <label>Penerbit:</label>
        <input type="text" name="penerbit" value="{{$bukus->penerbit}}" id="penerbit" class="form-control mb-2">
        <label>Pengarang:</label>
        <input type="text" name="pengarang" value="{{$bukus->pengarang}}" id="pengarang" class="form-control mb-2">
        <label>Jumlah: :</label>
        <input type="text" name="jumlah" value="{{$bukus->jumlah}}" id="jumlah" class="form-control mb-2">
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection