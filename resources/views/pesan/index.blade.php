@extends('layouts.app')

@section('content')
<div class="container">
    <div class ="row">
        <div class="col-md-12">
            <a href="{{ url('home')}}" class="btn btn-primary"><i class ="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_barang}}</li>
  </ol>
</nav>
        </div>
        <div class="col-md-12 mt-2">
            <div class="card">
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 ">
                            <img src="{{ url('uploads')}}/{{ $barang->gambar}}" class="rounded mx-auto d-block"
                            width="100%" alt="">
                     </div>
                     <div class="col-md-6 mt-5">
                     <h2>{{ $barang->nama_barang}}</h2>
                     <table class="table">
                      <tbody>
                        <tr>
                            <td>Harga</td>
                            <td>:</td>
                            <td>Rp. {{ number_format($barang->harga) }}</td>
                        </tr>
                        <tr>
                            <td>stok</td>
                            <td>:</td>
                            <td>{{ number_format($barang->stok) }}</td>
                        </tr>
                        <tr>
                            <td>keterangan</td>
                            <td>:</td>
                            <td>{{ $barang->keterangan}}</td>
                        </tr>
                        <div class="col-md-12 mt-3">
                        <tr>
                            <td>Jumlah Pesan</td>
                            <td>:</td>
                            <td>
                            
                                <form action="{{ route('pesan.post', $barang->id) }}" method="POST">
                                    @csrf
                                   <input type="text" name="jumlah_pesan" class="form-control",required="">
                                    
                                    
                                    <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                </form>
                               
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
