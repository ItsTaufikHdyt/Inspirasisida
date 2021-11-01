@extends('homepage::layouts.app')

@section('htmlheader_title')
Inspirasi Sida
@endsection
@section('navbar')
<ul class="navbar-nav mr-auto w-100 justify-content-end">
  @auth
  <li class="nav-item"><a href="#" title="Dashboard">Hi, {{Auth::user()->nama}}</a></li>
  <li class="nav-item">
    <a class="nav-link page-scroll" href="{{route('sipeena')}}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link page-scroll" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </li>
  </li>
  @endauth
</ul>
@endsection
@section('main-content')
<section id="portfolios" class="section">
  <!-- Container Starts -->
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Profil User</h2>
      <span></span>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-xs-12">
        <!-- kosong -->
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <form method="post" action="{{route('profil.update',Auth::user()->id)}}">
          @csrf
          {{ method_field('PUT') }}
          Username<br>
          <input type="text" name="username" value="{{Auth::user()->username}}" class="form-control" autofocus>
          <input type="checkbox" name="centang" class="i-checks" onclick="var input = document.getElementById('pass'); if( this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}"> Ganti Password<br>
          <input type="password" name="password" id="pass" class="form-control" disabled="true" required>
          <button name="save" type="submit" class="btn btn-common btn-effect">Simpan</button>
        </form>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <!-- kosong -->
      </div>
    </div>
  </div>
  <br><br><br><br>
</section>
@endsection