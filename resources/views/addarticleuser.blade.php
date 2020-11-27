@extends('master')
  @section('content')
      <!-- Page Content -->
  <div class="container">
  <br><br><br>
<div class="row">

  <!-- Blog Entries Column -->
  
  <div class="col-md-8">
    
    <h1 class="my-4">Kelola Data <br>
      <small>Halaman ini berfungsi untuk mengelola User dalam tabel</small>
    </h1>

    <form action="/manageusers/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control"  required="required" name="name"></br>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" required="required" name="image"></br>
        </div>  
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" required="required" name="email"></br>
        </div>
        <div class="form-group">
            <label for="roles">Roles</label>
            <input type="text" class="form-control" required="required" name="roles">
            </br>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" required="required" name="password"></br>
        </div>
        
        <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
    </form>
    

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