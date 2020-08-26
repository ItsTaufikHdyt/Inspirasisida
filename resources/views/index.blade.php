@extends('homepage::layouts.app')

@section('htmlheader_title')
	Inspirasi Sida
@endsection
@section('navbar')
<ul class="navbar-nav mr-auto w-100 justify-content-end">
            @guest
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#slider-area">Home</a>
              </li>
        
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#berita">Berita</a>
              </li>

              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#panduan">Panduan</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link page-scroll" href="{{Route('userRegister')}}">Registrasi</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link page-scroll" href="{{Route('userLogin')}}"><b>Login</b></a>
              </li>
              @auth
               <li class="nav-item"><a href="#" title="Dashboard">Hi, {{Auth::user()->nama}}</a></li>                                                                                   
                <li class="nav-item">
                  <a class="nav-link page-scroll" href="#slider-area">Home</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link page-scroll" href="#akun">AkunPeena</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link page-scroll" href="#contact">Contact</a>
                </li>
                @endauth
              @else
              <li class="nav-item">
              <a class="nav-link page-scroll" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
              </li>
              @endguest  
              </li>                               
            </ul>
@endsection
@section('carousel')
<!-- Main Carousel Section -->
<br><br>
      <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="{{asset('img/slider/bg-11.jpg')}}" width="100%">
              <div class="carousel-caption text-left">
                <!-- <h3>&nbsp;</h3> -->
                <h2 class="wow fadeInRight" data-wow-delay="0.2s"><font color="#af6cf7" style="-webkit-text-stroke: 1px white;">Inspirasi Sida</font></h2>
                <h4 class="wow fadeInRight" data-wow-delay="0.4s"><font color="#ffffff">Badan Perencanaan, Penelitian, dan Pengembangan</font></h4>
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/slider/bg-22.jpg')}}" width="100%">
              <div class="carousel-caption text-center">
                <!-- <h3>&nbsp;</h3> -->
                <h2 class="wow bounceIn" data-wow-delay="0.3s"><font color="#af6cf7" style="-webkit-text-stroke: 1px white;">SiPEENA</font></h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.6s"><font color="#ffffff" >Lomba Inovasi dan Penelitian</font></h4>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/slider/bg-33.jpg')}}" width="100%">
              <div class="carousel-caption text-center">
                <!-- <h3>&nbsp;</h3> -->
                <h2 class="wow fadeInRight" data-wow-delay="0.3s"><font color="#af6cf7" style="-webkit-text-stroke: 1px white;">Databases</font></h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.6s"><font color="#ffffff" >Database Penelitian dan Inovasi</font></h4>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>  
@endsection
@section('main-content')
<!-- <div id="particles-js"></div> -->

   <!-- Features Section Start -->
   <!-- <section id="bg"></section> -->
    <div id="features" class="section-home bg-home">
      <div class="container">
        <div class="row">
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <a href="#" data-toggle="modal" data-target="#dbinovasi">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                <div class="icon color-1">
                <img src="{{asset('img/icon/tech.png')}}" height="188" width="188" alt="">
                </div>
                <h4>Database Inovasi</h4>
              </div>
            </a>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <a href="{{route('sipeena')}}">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                <div class="icon color-2">
                  <img src="{{asset('img/logo/peenfin2.png')}}" alt="">
                </div>
                <h4>SiPEENA</h4>
              </div>
            </a>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <a href="#" data-toggle="modal" data-target="#dbpenelitian">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                <div class="icon color-1">
                <img src="{{asset('img/icon/computer.png')}}" height="188" width="188" alt="">
                </div>
                <h4>Database Penelitian</h4>
              </div>
            </a>
          </div>
          <!-- End featured -->
        </div>
      </div>
    </div>
    <!-- Features Section End -->  
    
    <!-- Start Pricing Table Section -->
    <div id="berita" class="section-home">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Berita Terbaru</h2>
          <span>Berita</span>
          <p class="section-subtitle">Dapatkan info terbaru e-Litbang disini.</p>
        </div>

        <div class="row pricing-tables">
        @forelse($prosedur as $data)
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="pricing-table">
                  <div class="pricing-details">
                    <h2>{{$data->judul_prosedur}}</h2>
                    <div class="price">
                    <image height="150" width="130" src="{{asset('img/icon/pdf.png')}}"><br>
                      <span>
                      {{$data->created_at->format('Y-m-d')}}
                        | {{$data->created_at->diffForHumans()}}
                        </span> 
                    </div>
                  </div>
                  <div class="plan-button">
                    <a href="{{url('prosedur/more/'.$data->id)}}" class="btn btn-primary">Read More</a>
                  </div>
                </div>
              </div>  
        @empty
        Postingan Belum tersedia
        @endforelse    
        </div>
        <br><center>
      <a href="" class="btn-common">1</a>
        </center>
      </div>
    </div>
    <!-- End Pricing Table Section -->

    <!-- Gallery Section Start -->
    <div id="gallery" class="section-home bg-gallery">      
      <div class="contact-form">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Galeri Foto</h2>
            <span>Galeri</span>
          </div>
          <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">
              <div id="galeri" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" style="height: 420px; border-radius: 10px;" src="{{asset('img/galeri/bp1.jpg')}}">
                    </div>
                    @forelse($galeri_foto as $data)
                    <div class="carousel-item">
                      <img class="d-block w-100" style="height: 420px; border-radius: 10px;" src="{{url('storage/galeri/' .$data->foto)}}" >
                    </div>
                    @empty
                    @endforelse
                  <a class="carousel-control-prev" href="#galeri" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#galeri" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6">
              <div id="galeri_poster" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner card" >
                      <div class="carousel-item active">
                        <image style="height: 420px; width: 350px; object-fit: fill; border-radius: 5px;" src="{{asset('img/poster/poster2019.jpeg')}}">
                      </div>
                      @forelse($galeri_poster as $data)
                      <div class="carousel-item">
                        <image style="height: 420px; width: 350px; object-fit: fill; border-radius: 5px;" src="{{url('storage/galeri/' .$data->foto)}}">
                      </div>
                    @empty
                    @endforelse
                      <a class="carousel-control-prev" href="#galeri_poster" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#galeri_poster" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
              </div>
            </div>
        </div>
      </div>            
      </div>
    </div>
    <!-- Gallery Section End -->
    
    <!-- Contact Section Start -->
    <div id="contact" class="section-home">      
      <div class="contact-form">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Get In Touch</h2>
            <span>Contact</span>
            <p class="section-subtitle">Informasi seputar inspirasi sida.</p>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <h3>Inpirasi Sida</h3>
              <div class="textwidget">
                <p>Aplikasi berbasis web yang memfasilitasi user 
                untuk mendapatkan informasi seputar 
                penelitian dan pengembangan, siPeena, serta database penelitian</p>
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
    </div>
    <!-- Contact Section End -->

    <!--- Pop up Poster -->
    <!-- <div class="modal fade" id="poster" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
  
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          <div class="modal-body">
          <img src="{{asset('img/poster.jpeg')}}" width="100%">
          </div>
        </div>
      </div>
    </div> -->
    <!--- End up Poster -->

    <!--- Pop Up Database Inovasi -->
    <div class="modal fade" id="dbinovasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
  
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          <div class="modal-body">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 col-md-6 col-xs-12">
                <a href="{{Route('home.dbOpdInovasi')}}">
                  <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                    <div class="icon color-1">
                      <img height="100" width="100" src="{{asset('img/icon/government.webp')}}" alt="">
                    </div>
                    <h4>Perangkat Daerah</h4>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 col-md-6 col-xs-12">
                <a href="{{Route('home.dbMasyarakatInovasi')}}">
                  <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                    <div class="icon color-1">
                      <img height="100" width="100" src="{{asset('img/icon/people.png')}}" alt="">
                    </div>
                    <h4>Masyarakat</h4>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--- End Up Database Inovasi -->

    <!--- Pop Up Database Penelitian -->
    <div class="modal fade" id="dbpenelitian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
  
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          <div class="modal-body">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 col-md-6 col-xs-12">
                <a href="{{Route('home.dbOpdPenelitian')}}">
                  <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                    <div class="icon color-1">
                    <img height="100" width="100" src="{{asset('img/icon/government.webp')}}" alt="">
                    </div>
                    <h4>Perangkat Daerah</h4>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 col-md-6 col-xs-12">
                <a href="{{Route('home.dbMasyarakatPenelitian')}}">
                  <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                    <div class="icon color-1">
                    <img height="100" width="100" src="{{asset('img/icon/people.png')}}" alt="">
                    </div>
                    <h4>Masyarakat</h4>
                  </div>
                </a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!--- End Up Database Penelitian -->

@endsection
@section('custom_scripts')
<script type="text/javascript">
  $('#poster').modal('show');
  
</script>
@endsection

