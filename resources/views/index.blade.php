@extends('homepage::layouts.app')

@section('htmlheader_title')
	eLitbang
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
                <h2 class="wow fadeInRight" data-wow-delay="0.2s"><font color="#af6cf7">eLitbang</font></h2>
                <h4 class="wow fadeInRight" data-wow-delay="0.4s"><font color="#af6cf7">Badan Perencanaan, Penelitian, dan Pengembangan</font></h4>
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/slider/bg-22.jpg')}}" width="100%">
              <div class="carousel-caption text-center">
                <!-- <h3>&nbsp;</h3> -->
                <h2 class="wow bounceIn" data-wow-delay="0.3s"><font color="#af6cf7">SiPeena</font></h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.6s"><font color="#af6cf7">Inovasi, Penelitian, dan Teknologi Tepat Guna</font></h4>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/slider/bg-33.jpg')}}" width="100%">
              <div class="carousel-caption text-center">
                <!-- <h3>&nbsp;</h3> -->
                <h2 class="wow fadeInRight" data-wow-delay="0.3s"><font color="#af6cf7">Databases</font></h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.6s"><font color="af6cf7">Database Penelitian dan Inovasi</font></h4>
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
<h6 align="center"><b><font color="red">Pemberitahuan! Untuk mempermudah akses website eLitbang dimohon menggunakan PC/Laptop</font></b></h6>
   <!-- Features Section Start -->
   <!-- <div id="particles-js"></div> -->
    <section id="features" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">FEATURES</h2>
          <span>Data</span>
          <p class="section-subtitle">Fitur-Fitur Utama Elitbang.</p>
        </div>
        <div class="row">
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <a href="#">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                <div class="icon color-1">
                  <i class="lni-database"></i>
                </div>
                <h4>Database Inovasi</h4>
              </div>
            </a>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <a href="#">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                <div class="icon color-1">
                  <i class="lni-pencil"></i>
                </div>
                <h4>Sipeena</h4>
              </div>
            </a>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <a href="#">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                <div class="icon color-1">
                  <i class="lni-database"></i>
                </div>
                <h4>Database Penelitian</h4>
              </div>
            </a>
          </div>
          <!-- End featured -->
        </div>
      </div>
    </section>
    <!-- Features Section End -->  
    
    <!-- Start Pricing Table Section -->
    <div id="slider-area" class="section pricing-section">
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
                      <span>
                      {{$data->created_at->format('Y-m-d')}}
                        | {{$data->created_at->diffForHumans()}}
                        </span> 
                    </div>
                  </div>
                  <div class="plan-button">
                    <a href="{{url('prosedur/more/'.$data->id)}}" class="btn btn-common btn-effect">Read More</a>
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
    
    <!-- Contact Section Start -->
    <section id="contact" class="section">      
      <div class="contact-form">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Get In Touch</h2>
            <span>Contact</span>
            <p class="section-subtitle">Informasi seputar eLitbang.</p>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <h3>e-Litbang</h3>
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
    </section>
    <!-- Contact Section End -->
    
    <!-- Map Section Start -->
    <section id="google-map-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 padding-0">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7979.630852826366!2d117.44259233488769!3d0.06900890000001055!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320a0eac4cfb59e5%3A0x7cbf53536c3c4fc9!2sGraha+Taman+Praja!5e0!3m2!1sid!2sid!4v1521722017504" width="1500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
          </div>
        </div>
      </div>
    </section>
    <!-- Map Section End -->
    </div>
    <div class="modal fade" id="poster" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

@endsection
@section('custom_scripts')
<script type="text/javascript">
  $('#poster').modal('show');
  
  particlesJS.load('particles-js','{{asset('particlesjs/particles.json')}}', function() {
        console.log('particles.json loaded...');
      })
</script>
@endsection

