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


        <div class="content">
            <div class="container">
                <div class="row align-items-stretch no-gutters contact-wrap">
                    <div class="col-md-8">
                        <div class="form h-100">
                            <form class="mb-2"action="/products" method="POST" enctype="multipart/form-data"
                                id="contactForm" name="contactForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="" class="col-form-label">Nama Produk</label>
                                        <input type="text" class="form-control" name="namaproduk" id="namaproduk">
                                    </div>
                                    @error('namaproduk')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="" class="col-form-label">Deskripsi</label>
                                        <input type="text" class="form-control" name="deskripsi" id="deskripsi">
                                    </div>
                                    @error('deskripsi')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="" class="col-form-label">Harga</label>
                                        <input type="text" class="form-control" name="harga" id="harga">
                                    </div>
                                    @error('harga')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="" class="col-form-label">Gambar</label>
                                        <input type="file" class="form-control" name="gambar" id="gambar">
                                    </div>
                                    @error('gambar')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>


                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="submit" value="Tambah Produk"
                                            class="btn btn-primary rounded-0 py-2 px-4">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                            </form>
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

    </body>

    </html>
@endsection
