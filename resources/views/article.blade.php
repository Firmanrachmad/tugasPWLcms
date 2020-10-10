@extends('master')   
@section('title')
    {{$article->title}}
@endsection 
@section('content')
<br><br>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{ $article->title }}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="https://www.tripzilla.id/gunung-indonesia-pemandangan-mempesona/62">Firman Rachmad C.</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 1, 2019 at 12:00 PM</p>

        <hr>

        <!-- Preview Image -->
        {{$article->featured_image}}
        <img class="card-img-top" src={{$article->featured_image}} alt="Card image cap">
        
        
        <hr>

        <!-- Post Content -->
        {{$article->content}}
   

        <hr>
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Andi_ar7</h5>
            Bagus sekali cuy pemandangannya.
          </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Adrianexe</h5>
            Iya bro bagus banget pemandangannya,fotoinnya bagus banget lu
            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Firman Rachmad C. (Author)</h5>
                Makasih banyak bro wkwk
              </div>
            </div>

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Adrianexe</h5>
                Eh, kapan-kapan bikinin yang sendang biru bisa ga bro hehe
              </div>
            </div>
            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Firman Rachmad C. (Author)</h5>
                Inshaallah broo kalau ada budget langsung gass
              </div>
            </div>

          </div>
        </div>

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

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">List Pariwisata</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                <li>
                <a href="/article/1">Terumbu Karang RajaAmpat</a>
              </li>
              <li>
                <a href="/article/2">Gunung Rinjani</a>
              </li>
              <li>
                <a href="/article/3">Gunung Semeru</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="/article/4">Pantai RajaAmpat</a>
              </li>
              <li>
                <a href="/article/5">Gunung Arjuno</a>
              </li>
                </ul>
              </div>
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

 </div>
@endsection		