@extends('admin::layouts.app')

@section('htmlheader_title')
	eLitbang | Admin
@endsection
@section('main-content')
<h4>Data Verifikasi Pendaftaran SiPeena</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
            <ul id="myTabedu1" class="tab-review-design">
                <li class="active"><a data-toggle="tab" href="#TabPerorangan">Perorangan</a>
                </li>
                <li><a data-toggle="tab" href="#TabKelompok">Kelompok</a>
                </li>
                <li><a data-toggle="tab" href="#TabLembaga">Lembaga/Instansi</a>
                </li>
                <li><a data-toggle="tab" href="#TabOpd">Perangkat Daerah</a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                <div class="product-tab-list tab-pane fade active in" id="TabPerorangan">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="row">
                                    <div class="col-lg-12">
                                    	<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
	                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    		<thead>
							                    <tr>
							                        <th data-field="id">No.</th>
							                        <th data-field="name">Nama Pendaftar</th>
							                        <th data-field="email">Email</th>
							                        <th data-field="ttl">Tempat Tanggal Lahir</th>
							                        <th data-field="job">Kategori siPeena</th>
							                        <th data-field="action">Aksi</th>
							                    </tr>
							                </thead>
							                <tbody>
                                            @php
                                                $no = 1;
                                            @endphp

                                            @forelse($perorangan as $data)
								                <tr>
								                						                    
	                                    			<td style="width: 5px;">{{$no++}}</td>
	                                    			<td>{{$data->nama}}</td>
	                                    			<td>{{$data->email}}</td>
	                                    			<td>{{$data->ttl}}</td>
	                                    			<td>{{$data->kategori_peena}}</td>
	                                    			<td><a href="{{url('admin/verifikasi-pendaftaran/'.$data->id)}}" target="_blank">
	                                    				<button class="btn btn-custon-four btn-warning btn-xs">
												        <i class="fa fa-eye"></i>
												    	</button></a>
												    	<button type="button" class="btn btn-custon-four btn-danger btn-xs" data-toggle="modal" data-target="#DangerModalalert{{$data->id}}"><i class="fa fa-trash"></i></button>
												    	<div id="DangerModalalert{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
								                            <div class="modal-dialog">
								                                <div class="modal-content">
								                                	<form action="{{url('admin/delete-data-sipeena-pendaftaran/'.$data->id)}}" method="post">
								                                    <input type="hidden" name="_method" value="DELETE">
																	@csrf
																	<div class="modal-close-area modal-close-df">
								                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
								                                    </div>
								                                    <div class="modal-body">
								                                        <input type="hidden" name="id" class="form-control" value="{{$data->id}}">
								                                        <p>Yakin akan menghapus data user {{$data->nama}}?</p>
								                                    </div>
								                                    <div class="modal-footer danger-md">
								                                        <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
				                                    					<button type="submit" name="del1" class="btn btn-custon-four btn-danger btn-md"><i class="fa fa-trash"></i> Delete</button>
								                                    </div>
								                                	</form>
								                                </div>
								                            </div>
								                        </div>
												    </td>
	                                    		</tr>
                                                @empty
                                                <tr>
                                                    <td colspan="6" align="center">Data Tidak Ada</td>
                                                </tr>
                                            @endforelse
	                                    	</tbody>
	                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab-list tab-pane fade" id="TabKelompok">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="row">
                                    <div class="col-lg-12">
                                    	<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
	                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    		<thead>
							                    <tr>
							                        <th data-field="id">No.</th>
							                        <th data-field="name">Nama Ketua</th>
							                        <th data-field="email">Email</th>
							                        <th data-field="ttl">Tempat Tanggal Lahir</th>
							                        <th data-field="job">Kategori Penelitian</th>
							                        <th data-field="action">Aksi</th>
							                    </tr>
							                </thead>
							                <tbody>
                                            @php
                                                $no = 1;
                                            @endphp

                                            @forelse($kelompok as $data)
								                <tr>					                    
	                                    			<td style="width: 5px;">{{$no++}}</td>
	                                    			<td>{{$data->nama}}</td>
	                                    			<td>{{$data->email}}</td>
	                                    			<td>{{$data->ttl}}</td>
	                                    			<td>{{$data->kategori_peena}}</td>
	                                    			<td><a href="index.php?halaman=verif-penelitian-ind&idverif={{$data->id}}" target="_blank">
	                                    				<button class="btn btn-custon-four btn-warning btn-xs">
												        <i class="fa fa-eye"></i>
												    	</button></a>
												    	<button type="button" class="btn btn-custon-four btn-danger btn-xs" data-toggle="modal" data-target="#DangerModalalert{{$data->id}}"><i class="fa fa-trash"></i></button>
												    	<div id="DangerModalalert{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
								                            <div class="modal-dialog">
								                                <div class="modal-content">
																<form action="{{url('admin/delete-data-sipeena-pendaftaran/'.$data->id)}}" method="post">
								                                    <input type="hidden" name="_method" value="DELETE">
																	@csrf
								                                    <div class="modal-close-area modal-close-df">
								                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
								                                    </div>
								                                    <div class="modal-body">
								                                        <input type="hidden" name="id" class="form-control" value="{{$data->id}}">
								                                        <p>Yakin akan menghapus data user {{$data->nama}}?</p>
								                                    </div>
								                                    <div class="modal-footer danger-md">
								                                        <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
				                                    					<button type="submit" name="del2" class="btn btn-custon-four btn-danger btn-md"><i class="fa fa-trash"></i> Delete</button>
								                                    </div>
								                                	</form>
								                                </div>
								                            </div>
								                        </div>
													</td>
	                                    		</tr>
                                    			@empty
                                                <tr>
                                                    <td colspan="6" align="center">Data Tidak Ada</td>
                                                </tr>
                                            @endforelse
	                                    	</tbody>
	                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab-list tab-pane fade" id="TabLembaga">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
	                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    		<thead>
							                    <tr>
							                        <th data-field="id">No.</th>
							                        <th data-field="name">Nama Pendaftar</th>
							                        <th data-field="lmb">Nama Lembaga</th>
							                        <th data-field="email">Email</th>
							                        <th data-field="ttl">Kategori siPeena</th>
							                        <th data-field="action">Aksi</th>
							                    </tr>
							                </thead>
							                <tbody>
                                            @php
                                                $no = 1;
                                            @endphp

                                            @forelse($lembaga as $data)
								                <tr>					                    
	                                    			<td style="width: 5px;">{{$no++}}</td>
	                                    			<td>{{$data->nama}}</td>
	                                    			<td>{{$data->nama_lembaga}}</td>
	                                    			<td>{{$data->email}}</td>
	                                    			<td>{{$data->kategori_peena}}</td>
	                                    			<td><a href="index.php?halaman=verif-penelitian-lmb&idverif={{$data->id}}" target="_blank">
	                                    				<button class="btn btn-custon-four btn-warning btn-xs">
												        <i class="fa fa-eye"></i>
												    	</button></a>
												    	<button type="button" class="btn btn-custon-four btn-danger btn-xs" data-toggle="modal" data-target="#DangerModalalert{{$data->id}}"><i class="fa fa-trash"></i></button>
												    	<div id="DangerModalalert{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
								                            <div class="modal-dialog">
								                                <div class="modal-content">
																<form action="{{url('admin/delete-data-sipeena-lembaga/'.$data->id)}}" method="post">
								                                    <input type="hidden" name="_method" value="DELETE">
																	@csrf
								                                    <div class="modal-close-area modal-close-df">
								                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
								                                    </div>
								                                    <div class="modal-body">
								                                        <input type="hidden" name="id" class="form-control" value="{{$data->id}}">
								                                        <p>Yakin akan menghapus data Lembaga {{$data->nama_lembaga}}?</p>
								                                    </div>
								                                    <div class="modal-footer danger-md">
								                                        <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
				                                    					<button type="submit" name="del3" class="btn btn-custon-four btn-danger btn-md"><i class="fa fa-trash"></i> Delete</button>
								                                    </div>
								                                	</form>
								                                </div>
								                            </div>
								                        </div>
												    </td>
	                                    		</tr>
                                                @empty
                                                <tr>
                                                    <td colspan="6" align="center">Data Tidak Ada</td>
                                                </tr>
                                            @endforelse
	                                    	</tbody>
	                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab-list tab-pane fade" id="TabOpd">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
	                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    		<thead>
							                    <tr>
							                        <th data-field="id">No.</th>
							                        <th data-field="name">Nama OPD</th>
							                        <th data-field="lmb">Nama Pendaftar</th>
							                        <th data-field="nip">NIP</th>
							                        <th data-field="email">Email</th>
							                        <th data-field="ttl">Telepon</th>
							                        <th data-field="action">Aksi</th>
							                    </tr>
							                </thead>
							                <tbody>
                                            @php
                                                $no = 1;
                                            @endphp

                                            @forelse($pena_opd as $data)
								                <tr>						                    
	                                    			<td style="width: 5px;">{{$no++}}</td>
	                                    			<td>{{$data->nama}}</td>
	                                    			<td>{{$data->tgjawab}}</td>
	                                    			<td>{{$data->nip}}</td>
	                                    			<td>{{$data->email}}</td>
	                                    			<td>{{$data->telp}}</td>
	                                    			<td><a href="index.php?halaman=verif-penelitian-opd&idverif={{$data->id}}" target="_blank">
	                                    				<button class="btn btn-custon-four btn-warning btn-xs">
												        <i class="fa fa-eye"></i>
												    	</button></a>
												    	<button type="button" class="btn btn-custon-four btn-danger btn-xs" data-toggle="modal" data-target="#DangerModalalert{{$data->id}}"><i class="fa fa-trash"></i></button>
												    	<div id="DangerModalalert{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
								                            <div class="modal-dialog">
								                                <div class="modal-content">
																<form action="{{url('admin/delete-data-sipeena-opd/'.$data->id)}}" method="post">
								                                    <input type="hidden" name="_method" value="DELETE">
																	@csrf
								                                    <div class="modal-close-area modal-close-df">
								                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
								                                    </div>
								                                    <div class="modal-body">
								                                        <input type="hidden" name="id" class="form-control" value="{{$data->id}}">
								                                        <p>Yakin akan menghapus data OPD {{$data->nama}}?</p>
								                                    </div>
								                                    <div class="modal-footer danger-md">
								                                        <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
				                                    					<button type="submit" name="del4" class="btn btn-custon-four btn-danger btn-md"><i class="fa fa-trash"></i> Delete</button>
								                                    </div>
								                                	</form>
								                                </div>
								                            </div>
								                        </div>
													</td>
	                                    		</tr>
                                    			@empty
                                                <tr>
                                                    <td colspan="7" align="center">Data Tidak Ada</td>
                                                </tr>
                                            @endforelse
	                                    	</tbody>
	                                    </table>
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
                