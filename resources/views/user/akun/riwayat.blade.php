@extends('homepage::layouts.app')

@section('htmlheader_title')
Inspirasi Sida
@endsection

@section('main-content')
<section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Riwayat User</h2>
          <span></span>
        </div>
        <br>
        <div class="row">       
          <div class="col-lg-4 col-md-6 col-xs-12">
     
          </div> 
          <div class="col-lg-4 col-md-6 col-xs-12">
            <ul class="events">
              <li>
                <time>{{$created_at_user->diffForHumans()}}</time> 
                <span><strong>Create Account</strong></span>
              </li>
              <li>
                <time datetime="10:03">10:03</time> 
                <span><strong>Bat &amp; Ball</strong> On time</span></li>
              <li>
            </ul>
          </div> 
          <div class="col-lg-4 col-md-6 col-xs-12">
          
          </div>  
        </div>        
      </div>
      <br><br><br><br>
    </section>
@endsection


