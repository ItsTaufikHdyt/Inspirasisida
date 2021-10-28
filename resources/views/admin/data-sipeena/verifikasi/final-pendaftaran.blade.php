@extends('admin::layouts.app')

@section('htmlheader_title')
Inspirasi Sida | Admin
@endsection
@section('main-content')
<h4>Data Finalis Pendaftaran SiPeena
    <span class="label label-success">Finalis</span>
</h4>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="profile-info-inner">
            <div class="profile-img">
                <img src="{{asset('img/pas-foto.jpg')}}" alt="">
            </div>
            <div class="profile-details-hr">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="address-hr">
                            <p align="center"><b>Link Proposal</b><br />
                                <a href="{{url('#')}}">Berkas Proposal</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                        <div class="address-hr">
                            <p><b>Nama Pendaftar</b><br /> {{$pendaftaran->nama}}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                        <div class="address-hr">
                            <p><b>Tempat Tanggal Lahir</b><br /> {{$pendaftaran->ttl}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                        <div class="address-hr">
                            <p><b>Pendidikan</b><br /> {{$pendaftaran->pendidikan}}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                        <div class="address-hr">
                            <p><b>Agama</b><br /> {{$pendaftaran->agama}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                        <div class="address-hr">
                            <p><b>Kebangsaan</b><br /> {{$pendaftaran->nation}}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                            <p><b>Pekerjaan</b><br /> {{$pendaftaran->pekerjaan}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                        <div class="address-hr">
                            <p><b>Email</b><br /> {{$pendaftaran->email}}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                            <p><b>Telepon</b><br /> {{$pendaftaran->telp}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="address-hr">
                            <p><b>Alamat</b><br /> {{$pendaftaran->alamat}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
            <ul id="myTabedu1" class="tab-review-design">
                <li class="active"><a href="#ktp">KTP</a></li>
                <li><a href="#pernyataan">Surat Pernyataan</a></li>
                <li><a href="#izin-ortu">Izin Ortu</a></li>
                <li><a href="#izinsekolah">Izin Sekolah</a></li>
                <li><a href="#proposal">Proposal</a></li>
            </ul>
            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                <div class="product-tab-list tab-pane fade active in" id="ktp">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="{{asset('storage/ktp/'.$pendaftaran->ktp)}}" width="450" height="450" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab-list tab-pane fade in" id="pernyataan">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="{{asset('storage/surat-pernyataan/'.$pendaftaran->surat_pernyataan)}}" width="450" height="450" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab-list tab-pane fade in" id="izin-ortu">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="{{asset('storage/izin-ortu/'.$pendaftaran->izin_ortu)}}" width="450" height="450" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab-list tab-pane fade in" id="izin-sekolah">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="{{asset('storage/izin-sekolah/'.$pendaftaran->izin_sekolah)}}" width="450" height="450" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab-list tab-pane fade in" id="proposal">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a href="#" class="btn btn-danger">Download</a>
                                        <iframe src="{{url('storage/proposal/'.$pendaftaran->proposal)}}" height="100%" width="100%" frameborder="1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection