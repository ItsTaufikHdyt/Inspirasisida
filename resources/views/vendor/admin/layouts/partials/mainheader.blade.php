<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.php"><img class="main-logo" src="{{asset('admin/img/logo/inspirasisida.png')}}" width="180"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-7 col-md-0 col-sm-1 col-xs-12">
                                    <!-- kosong -->
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item">
                                                <a href="#" title="Penelitian Terbaru" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <img src="{{asset('admin/img/product/pro4.jpg')}}" alt="" />
                                                    <span class="admin-name">Administrator</span>
                                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <!-- <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a> -->
                                            </li>
                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                    <span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li class="active">
                                    <a href="{{url('admin/dashboard')}}">
                                        <span class="educate-icon educate-home icon-wrap"></span>
                                        <span class="mini-click-non">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Data siPeena</span></a>
                                    <ul class="submenu-angle" aria-expanded="false">
                                        <li><a href="{{url('admin/verifikasi')}}"><span class="mini-sub-pro">Verifikasi</span></a></li>
                                        <li><a href="{{url('admin/diterima')}}"><span class="mini-sub-pro">Diterima</span></a></li>
                                        <li><a href="{{url('admin/ditolak')}}"><span class="mini-sub-pro">Ditolak</span></a></li>
                                        <li><a href="{{url('admin/finalis')}}"><span class="mini-sub-pro">Finalis</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{url('admin/database')}}" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Database</span></a>
                                </li>
                                <li>
                                    <a href="{{url('admin/prosedur')}}" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Pengumuman</span></a>
                                </li>
                                <li>
                                    <a href="{{url('admin/data-opd')}}" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Data OPD</span></a>
                                </li>
                                <li>
                                    <a href="{{url('admin/galeri')}}" aria-expanded="false"><span class="educate-icon educate-info icon-wrap"></span> <span class="mini-click-non">Galeri</span></a>
                                </li>
                                <li>
                                    <a href="{{url('admin/activateduser')}}" aria-expanded="false"><span class="educate-icon educate-project icon-wrap"></span> <span class="mini-click-non">Data User</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->