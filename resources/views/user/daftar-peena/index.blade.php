@extends('homepage::layouts.app')

@section('htmlheader_title')
	Inspirasi Sida
@endsection
@section('navbar')
<ul class="navbar-nav mr-auto w-100 justify-content-end">
              @auth
               <li class="nav-item"><a href="#" title="Dashboard">Hi, {{Auth::user()->nama}}</a></li>                                                                                   
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
<section id="services" class="section bg-home">
      <div class="container">
        <div class="section-header">                    
          <h2 class="section-title">Kategori Pendaftaran siPeena</h2>
          <span>siPeena</span>
          <br><br>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <a href="{{route('inovasi')}}">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                <div class="icon color-1">
                  <i class="lni-pencil"></i>
                </div>
                <h4>Inovasi Masyarakat</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <a href="{{route('penelitian')}}">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon color-4">
                <i class="lni-layers"></i>
              </div>
              <h4>Penelitian Masyarakat</h4>
            </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <a href="{{route('opd')}}">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.6s">
                <div class="icon color-6">
                  <i class="lni-briefcase"></i>
                </div>
                <h4>Inovasi Perangkat Daerah</h4> 
              </div>
            </a>
            <br><br>
          </div>
        </div>
      </div>
</section>
<!-- <section id="akun" class="section bg-gallery">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Akun siPeena</h2>
          <span>siPeena</span>
          <br><br>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12">
            <a href="{{route('riwayat')}}">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                <div class="icon color-1">
                  <i class="lni-pencil"></i>
                </div>
                <h4>Riwayat siPeena</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12">
            <a href="{{route('profil')}}">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon color-4">
                <i class="lni-layers"></i>
              </div>
              <h4>Akun siPeena</h4>
            </div>
            </a>
            <br><br>
          </div>
        </div>
      </div>
</section> -->
    <!-- Contact Section Start -->
    <section id="contact" class="section">      
      <div class="contact-form">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Get In Touch</h2>
            <span>Contact</span>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <h3>e-Litbang</h3>
              <div class="textwidget">
                <p>If you think you have the passion, 
                attitude and capability to join us 
                the next big software company
                s so that we can get the convers.</p>
              </div>
              <ul class="footer-social">
                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
              </ul> 
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Link Terkait</h3>
                <ul class="menu">
                  <li><a href="http://bapelitbang.bontangkota.go.id/" target="_blank">Bapelitbang Kota Bontang</a></li>
                  <li><a href="http://ppid.bontangkota.go.id/" target="_blank">PPID Kota Bontang</a></li>
                  <li><a href="http://portal.bontangkota.go.id/" target="_blank">Portal Kota Bontang</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Contact Us</h3>
                <ul class="contact-footer">
                  <li>
                    <strong>Alamat :</strong> <span>Jl. Moch. Roem Gedung Graha Taman Praja Blok IV Lantai I</span>
                  </li>
                  <li>
                    <strong>Telephone :</strong> <span> (0548) 3030303<br>
                     &nbsp;0857 5021 4782</span>
                  </li>
                  <li>
                    <strong>Email :</strong> <span>elitbang@bontangkota.go.id</span>
                  </li>
                </ul> 
              </div>
            </div>
          </div>
        </div>
      </div>            
    </section>
    <!-- Contact Section End -->
    
@endsection

