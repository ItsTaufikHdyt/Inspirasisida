@extends('admin::layouts.app')

@section('htmlheader_title')
Inspirasi Sida | Admin
@endsection
@section('main-content')
<h4>Data Verifikasi Pendaftaran SiPeena
    <button type="button" class="btn btn-custon-four btn-danger pull-right" data-toggle="modal" data-target="#DangerModalalert">
        <i class="fa fa-check"></i> Verifikasi
    </button>
</h4>
<div id="DangerModalalert" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{url('admin/update-verifikasi-pendaftaran/'.$pendaftaran->id)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
                <div class="modal-body">
                    <p style="text-align: left;">Verifikasi siPeena </p>
                    <select class="form-control custom-select-value" name="kdverif" required>
                        <option>-Pilih Verifikasi-</option>
                        <option value="-1">Tolak</option>
                        <option value="1">ACC</option>
                    </select>
                    <p style="text-align: left;">Komentar</p>
                    <textarea name="komen" cols="62" rows="10" style="text-align: left;" placeholder="Komentar"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                    <button type="submit" name="verif" class="btn btn-custon-four btn-danger btn-md"><i class="fa fa-save"></i> Done</button>
                </div>
            </form>
        </div>
    </div>
</div>
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
                                <a href="{{'$pendaftaran->url_proposal' ?? '#'}}">Berkas Proposal</a>
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
                                        <iframe src="{{url('storage/proposal/'.$pendaftaran->proposal)}}" height="100%" width="100%" frameborder="0"></iframe>
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
</div>
@endsection