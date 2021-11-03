
<!-- Start Left menu area -->
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.php"><img class="main-logo" src="{{asset('admin/img/logo/inspirasisida.png')}}" width="180px"></a>
            <strong><a href="index.php"><img src="{{asset('admin/img/logo/logosn.png')}}" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
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
    </nav>
</div>
<!-- End Left menu area -->