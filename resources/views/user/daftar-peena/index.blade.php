@extends('homepage::layouts.app')

@section('htmlheader_title')
	eLitbang
@endsection

@section('main-content')
<section id="services" class="section bg-home">
      <div class="container">
        <h6 align="center"><b><font color="red">Pemberitahuan! Untuk mempermudah akses website eLitbang dimohon menggunakan PC/Laptop</font></b></h6>
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
<section id="akun" class="section bg-gallery">
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
    </section>
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
@endsection

