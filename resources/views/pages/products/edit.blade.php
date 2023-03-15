@extends('pages.main')

@section('content')

<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('sidebar-02/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('form-17/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/lee.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">



        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">


  </head>
<body>


<h3 class="mb-5">Edit Produk</h3>

<div class="content">
    <div class="container">
        <div class="row align-items-stretch no-gutters contact-wrap">
            <div class="col-md-8">
                <div class="form h-100">
                    <div class="col-8">
                    <form action="/products/{{ $tampil->id }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                        <label for="nama-produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" name="namaproduk" id="namaproduk" value="{{ $tampil->namaproduk }}" required>
                        @error('namaproduk')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                        <label for="nama-produk" class="form-label">Deskripsi Produk</label>
                        <textarea rows="5" class="form-control" name="deskripsi" id="deskripsi" required>{{ $tampil->deskripsi }}</textarea>
                        @error('deskripsi')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                        <label for="harga" class="form-label">Harga Produk</label>
                        <input type="number" class="form-control" name="harga" id="harga" value="{{ $tampil->harga }}" required>
                        @error('harga')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-custom">Edit</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/main.js"></script>

<script src="../../sidebar-02/js/jquery.min.js"></script>
<script src="../../sidebar-02/js/popper.js"></script>
<script src="../../sidebar-02/js/bootstrap.min.js"></script>
<script src="../../sidebar-02/js/main.js"></script>
@endsection


</body>
</html>
