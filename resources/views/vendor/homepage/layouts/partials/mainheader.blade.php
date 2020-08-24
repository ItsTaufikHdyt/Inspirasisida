 <!-- Header Section Start -->
 <header id="slider-area">  
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
        <div class="container">          
          <a class="navbar-brand" href="{{Route('index')}}" align="center"><img src="{{asset('img/logo/bapelitbang.png')}}" width="480px"></a>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            @yield('navbar')              
          </div>
        </div>
      </nav> 

    </header>
    <!-- Header Section End --> 
@yield('carousel')