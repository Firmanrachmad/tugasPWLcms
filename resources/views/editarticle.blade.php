@extends('master')
  @section('content')
      <!-- Page Content -->
  <div class="container">
  <br><br><br>
<div class="row">

  <!-- Blog Entries Column -->
  
  <div class="col-md-8">
    
    <h1 class="my-4">Kelola Data <br>
      <small>Halaman ini berfungsi untuk mengelola data dalam tabel</small>
    </h1>

    <form action="/article/update/{{$article->id}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$article->id}}"></br>
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" required="required" name="title" value="{{$article->title}}"></br>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" required="required" name="content" value="{{$article->content}}"></br>
        </div>
        <div class="form-group">
            <label for="image">Feature Image</label>
            <input type="text" class="form-control" required="required" name="image" value="{{$article->featured_image}}"></br>
        </div>
        <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
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