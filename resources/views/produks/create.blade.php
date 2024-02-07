@extends('menus.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambahkan Produk Baru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary purple-in" href="{{ route('produks.index') }}" style="background-color: blueviolet"> kembali</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Ada yang salah dengan input<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>
    </div>
@endif
     
<form action="{{ route('produks.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control  purple-in" placeholder="nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>kategori:</strong>
                <input class="form-control  purple-in" name="kategori" placeholder="kategori"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>harga:</strong>
                <textarea class="form-control  purple-in" name="harga_jual" placeholder="harga"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <br>
                <button type="submit" class="btn btn-primary" style="background-color: blueviolet">Submit</button>
        </div>
    </div>
     
</form>
@endsection
<style>
    .purple-in:focus {
            border-color:blueviolet;
            box-shadow: 0 0 0 0.2rem blueviolet;
        }
</style>