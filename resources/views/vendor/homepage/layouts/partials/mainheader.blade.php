 <!-- Header Section Start -->
 <header id="slider-area">  
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
        <div class="container">          
          <a class="navbar-brand" href="index.php"><img src="{{asset('img/pemkot.png')}}" width="150px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <a class="navbar-brand w-50" align="center"><img src="{{asset('img/bapelitbang.png')}}" width="80px"></a>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
            @guest
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#slider-area">Home</a>
              </li>
        
              <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#akun">AkunPeena</a>
              </li> -->

              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contact</a>
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
          </div>
        </div>
      </nav> 

    </header>
    <!-- Header Section End --> 
@yield('carousel')