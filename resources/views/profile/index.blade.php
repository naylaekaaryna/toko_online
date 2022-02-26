@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-12">
            <a href="{{ url('home')}}" class="btn btn-primary"><i class ="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profile</li>
  </ol>
</nav>
</div>
        <div class="col-md-12">
        <div class="card">
        <div class="card-body">
        <h4><i class="fa fa-user"></i> My Profile</h4>
      <table class="table">
        <tbody>
              <tr>
                <td>Nama</td>
                <td width="10">:</td>
                <td>{{ $user->name }}</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{ $user->email }}</td>
              </tr>
              <tr>
                <td>No HP</td>
                <td>:</td>
                <td>{{ $user->nohp }}</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $user->alamat }}</td>
              </tr>
          </tbody>
      </table>    
    </div>              
        </div>
        </div>
        <div class="col-md-12 mt-2">
        <div class="card">
          <div class="card-body">
          <h4><i class="fa fa-pencil-alt"></i> Edit Profile</h4>
          <form action="{{ url('profile') }}" method="POST">
              @csrf
              <table class="table">
                  <tr>
                      <td>Nama</td>
                      <td width="2">:</td>
                      <td><input type="text" class="form-control" name="name" value="{{ $user->name }}"></td>
                  </tr>
                  <tr>
                      <td>Emaill</td>
                      <td>:</td>
                      <td><input type="email" class="form-control" name="email" value="{{ $user->email }}"></td>
                  </tr>
                  <tr>
                      <td>Password</td>
                      <td>:</td>
                      <td><input type="password" class="form-control" name="password"></td>
                  </tr>
                  <tr>
                      <td>No HP</td>
                      <td>:</td>
                      <td><input type="number" class="form-control" name="nohp" value="{{ $user->nohp }}"></td>
                  </tr>
                  <tr>
                      <td>Alamat</td>
                      <td>:</td>
                      <td><textarea name="alamat" id=""class="form-control" value="{{ $user->alamat }}"></textarea></td>
                    
                    </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td><button type="submit" class="btn btn-primary">Simpan</button></td>
                  </tr>
              </table>
          </form>
        </div>
    </div>
    </div>
@endsection
