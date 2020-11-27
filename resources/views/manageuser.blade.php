@extends('master')
  @section('content')
      <!-- Page Content -->
  <div class="container">
  <br><br><br>
<div class="row">

  <!-- Blog Entries Column -->
  
  <div class="col-md-8">
    
    <h1 class="my-4">Kelola Data <br>
      <small>Halaman ini berfungsi untuk mengelola data User dalam tabel</small>
    </h1>

    <a href="manageusers/add" class="btn btn-primary">Tambah Data User</a>
    </br>
    </br>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Foto Profil</th>
                <th>Email</th>
                <th>Roles</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $u)
        <tr>
            <td>{{$u->name}}</td>
            <td><img width="150px" src="{{ asset('storage/'.$u->image) }}" alt="ImageCap"></td>
            <!-- <td>{{ $u->image }}</td> -->
            <td>{{$u->email}}</td>
            <td>{{$u->roles}}</td>
            <td><a href="manageusers/edit/{{ $u->id }}" class="badge badge-warning">Edit</a></td>
            <td><a href="manageusers/delete/{{ $u->id }}" class="badge badge-danger">Hapus</a></td>
            
        </tr>
        @endforeach
    </tbody>
    </table>
    <a href="/manageusers/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
    

  </div>

  <!-- Sidebar Widgets Column -->
  <div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header">Search</h5>
      <div class="card-body">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-append">
            <button class="btn btn-secondary" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>


    <!-- Side Widget -->
    <div class="card my-4">
      <h5 class="card-header">Tentang "Travelling"</h5>
      <div class="card-body">
      Perjalanan/Travelling adalah pergerakan orang antar lokasi geografi yang jauh. Perjalanan/Travelling dapat dilakukan dengan kaki, sepeda, mobil, kereta, perahu, bus, pesawat, kapal atau alat lainnya, dengan atau tanpa bagasi.
      </div>
    </div>

  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->
  @endsection	