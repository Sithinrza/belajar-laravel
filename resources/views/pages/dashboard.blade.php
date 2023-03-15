<style>

    .row{
    text-align: center;
}
.row p{
    text-align: center;
}
.row .card{
    text-align: center;
    background: transparent;
    left: 29%;
    color: black;
    width: 500px;
    border-color: black;
}
</style>
@extends('pages.main')

@section('content')

<h4 class="text-center mb-5">Dashboard</h4>

  <div class="row">
    <div class="col-sm-12">
      <p class="text-center">Jumlah Data Produk</p>
      <div class="card">
        <div class="card-body">
          <h5>{{ $total }}</h5>
          <span>Produk</span>
        </div>
      </div>
    </div>
  </div>
  @endsection
