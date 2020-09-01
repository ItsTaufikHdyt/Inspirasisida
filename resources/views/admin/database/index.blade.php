@extends('admin::layouts.app')

@section('htmlheader_title')
	Inspirasi Sida | Admin
@endsection
@section('main-content')
@if($errors->any())
    <div class="alert alert-warning">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h4>Database Penelitian dan Inovasi</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
            <ul id="myTabedu1" class="tab-review-design">
                <li class="active"><a data-toggle="tab" href="#TabPerangkatDaerah">Perangkat Daerah</a>
                </li>
                <li><a data-toggle="tab" href="#TabMasyarakat">Masyarakat</a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                <div class="product-tab-list tab-pane fade active in" id="TabPerangkatDaerah">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="row">
                                    <div class="col-lg-12">
										<div class="bs-bars pull-left">
											<button type="button" class="btn btn-custon-four btn-primary" data-toggle="modal" data-target="#perangkatDaerah">
												<i class="fa fa-plus-circle"></i> Input Data
											</button>
										</div>
										<div id="perangkatDaerah" class="modal modal-xl  fade" role="dialog">
											<div class="modal-dialog">
												<div class="modal-content">
													<form action="{{url('admin/store-dbopd')}}" method="post" enctype="multipart/form-data">
													@csrf
													<div class="modal-close-area modal-close-df">
														<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
													</div>
													<div class="modal-body">
														<table width="100%">
															<tr>
																<td>Judul</td>
															</tr>
															<tr>
																<td><input type="text" name="judul" class="form-control" placeholder="Judul Inovasi / Penelitian..." required></td>
															</tr>
															<tr>
																<td>Tahun</td>
															</tr>
															<tr>
																<td><input type="text" name="tahun" class="form-control" placeholder="Tahun..." required></td>
															</tr>
															<tr>
																<td>Perangkat Daerah</td>
															</tr>
															<tr>
																<td><input type="text" name="opd" class="form-control" placeholder="Perangkat Daerah..." required></td>
															</tr>
															<tr>
																<td>Lokasi Daerah</td>
															</tr>
															<tr>
																<td><input type="text" name="lokasi" class="form-control" placeholder="Lokasi Daerah..." required></td>
															</tr>
															<tr>
																<td>Abstraksi / Profil Inovasi</td>
															</tr>
															<tr>
																<td>
																<textarea  name="abstraksi" class="form-control" cols="60" rows="10" placeholder="Abstraksi..." required></textarea>
																</td>
															</tr>
															<tr>
																<td>Kategori</td>
															</tr>
															<tr>
																<td>
																<select name="kategori" class="form-control" id="">
																	<option value="0">Inovasi</option>
																	<option value="1">Penelitian</option>
																</select>
																</td>
															</tr>
															<tr>
																<td>Upload File</td>
															</tr>
															<tr>
																<td>
																	<div class="file-upload-inner ts-forms">
																		<div class="input prepend-small-btn">
																			<div class="file-button">
																				Browse
																				<input type="file" name="berkas" onchange="document.getElementById('prepend-small-btn').value = this.value;">
																			</div>
																			<input type="text" name="berkas" id="prepend-small-btn" placeholder="no file selected">
																		</div>
																	</div>
																</td>
															</tr>
														</table>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
														<button type="submit" name="simpan" class="btn btn-custon-four btn-primary btn-md"><i class="fa fa-save"></i> Save</button>
													</div>
													</form>
												</div>
											</div>
										</div>
                                    	<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
	                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    		<thead>
							                    <tr>
							                        <th data-field="id">No.</th>
							                        <th data-field="name">Judul</th>
							                        <th data-field="thn">Tahun</th>
							                        <th data-field="opd">Perangkat Daerah</th>
							                        <th data-field="location">Lokasi Kegiatan</th>
													<th data-field="abstraksi">Abstraksi/Profil Inovasi</th>
													<th data-field="file">Berkas</th>
													<th data-field="category">Kategori</th>
							                        <th data-field="action">Aksi</th>
							                    </tr>
							                </thead>
							                <tbody>
                                            @php 
												$no = 1;
											@endphp
												@forelse($dbopd as $data)
								                <tr>								                						                    
	                                    			<td style="width: 5px;">{{$no++}}</td>
	                                    			<td>{{$data->judul}}</td>
	                                    			<td>{{$data->tahun}}</td>
	                                    			<td>{{$data->opd}}</td>
													<td>{{$data->lokasi}}</td>
	                                    			<td>{{substr($data->abstraksi, 0, 100)}}...</td>
													<td>
														@if($data->kategori === 0 && $data->berkas != null)
														<a href="{{url('admin/download-dbopd/'.$data->id)}}" target="_blank"><img src="{{asset('img/icon/pdf.png')}}" width="50" height="100"  alt=""></a></td>
														@else
														-
														@endif													
													<td>
														@if($data->kategori === 0)
														<label class="label label-success">Inovasi</label>
														@elseif($data->kategori === 1)
														<label class="label label-warning">Penelitian</label>
														@endif
													</td>
													<td>
													<button type="button" class="btn btn-custon-four btn-primary btn-xs" data-toggle="modal" data-target="#PrimaryModalalert{{$data->id}}"><i class="fa fa-pencil"></i></button>
													<div id="PrimaryModalalert{{$data->id}}" class="modal modal-xl  fade" role="dialog">
														<div class="modal-dialog">
															<div class="modal-content">
																<form action="{{url('admin/update-dbopd/'.$data->id)}}"  method="post" enctype="multipart/form-data">
																	<input type="hidden" name="_method" value="PUT">
																	@csrf
																<div class="modal-close-area modal-close-df">
																	<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
																</div>
																<div class="modal-body">
																<table width="100%">
																		<tr>
																			<td>Judul</td>
																		</tr>
																		<tr>
																			<td><input type="text" name="judul" value="{{$data->judul}}" class="form-control" placeholder="Judul Inovasi / Penelitian..." required></td>
																		</tr>
																		<tr>
																			<td>Tahun</td>
																		</tr>
																		<tr>
																			<td><input type="text" name="tahun" value="{{$data->tahun}}" class="form-control" placeholder="Tahun..." required></td>
																		</tr>
																		<tr>
																			<td>Perangkat Daerah</td>
																		</tr>
																		<tr>
																			<td><input type="text" name="opd" value="{{$data->opd}}" class="form-control" placeholder="Perangkat Daerah..." required></td>
																		</tr>
																		<tr>
																			<td>Lokasi Daerah</td>
																		</tr>
																		<tr>
																			<td><input type="text" name="lokasi" value="{{$data->lokasi}}" class="form-control" placeholder="Lokasi Daerah..." required></td>
																		</tr>
																		<tr>
																			<td>Abstraksi / Profil Inovasi</td>
																		</tr>
																		<tr>
																			<td>
																			<textarea   name="abstraksi"  cols="60" rows="10" class="form-control" placeholder="Abstraksi..." required>{{$data->abstraksi}}</textarea>
																			</td>
																		</tr>
																		<tr>
																			<td>Kategori</td>
																		</tr>
																		<tr>
																			<td>
																			<select name="kategori" class="form-control" id="">
																			@if($data->kategori === 0)
																				<option value="0" selected>Inovasi</option>
																				<option value="1">Penelitian</option>
																			@elseif($data->kategori === 1)
																				<option value="0">Inovasi</option>
																				<option value="1" selected>Penelitian</option>
																			@endif
																			</select>
																			</td>
																		</tr>
																		<tr>
																			<td>Upload File</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="file-upload-inner ts-forms">
																					<div class="input prepend-small-btn">
																						<div class="file-button">
																							Browse
																							<input type="file" name="berkas"onchange="document.getElementById('prepend-small-btn2').value = this.value;">
																						</div>
																						<input type="text" name="berkas" id="prepend-small-btn2" value="{{$data->berkas}}" placeholder="no file selected">
																					</div>
																				</div>
																			</td>
																		</tr>
																	</table>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
																	<button type="submit" name="edit" class="btn btn-custon-four btn-primary btn-md"><i class="fa fa-pencil"></i> Edit</button>
																</div>
																</form>
															</div>
														</div>
													</div>

													<button type="button" class="btn btn-custon-four btn-danger btn-xs" data-toggle="modal" data-target="#DangerModalalert{{$data->id}}"><i class="fa fa-trash"></i></button>
													<div id="DangerModalalert{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
														<div class="modal-dialog">
															<div class="modal-content">
																<form action="{{url('admin/delete-dbopd/'.$data->id)}}" method="post">
																	<input type="hidden" name="_method" value="DELETE">
																	@csrf
																<div class="modal-close-area modal-close-df">
																	<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
																</div>
																<div class="modal-body">
																	<input type="hidden" name="id" class="form-control" value="{{$data->id}}">
																	<p>Yakin akan menghapus {{$data->judul}}?</p>
																</div>
																<div class="modal-footer danger-md">
																	<button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
																	<button type="submit" name="del" class="btn btn-custon-four btn-danger btn-md"><i class="fa fa-trash"></i> Delete</button>
																</div>
																</form>
															</div>
														</div>
													</div>
													</td>	                            
	                                    		</tr>
												@empty
												<tr>
													<td colspan="8"><center>Data Tidak Ada</center></td>
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
				<div class="product-tab-list tab-pane fade" id="TabMasyarakat">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="row">
                                    <div class="col-lg-12">
										<div class="bs-bars pull-left">
											<button type="button" class="btn btn-custon-four btn-primary" data-toggle="modal" data-target="#masyarakat">
												<i class="fa fa-plus-circle"></i> Input Data
											</button>
										</div>
										<div id="masyarakat" class="modal modal-xl  fade" role="dialog">
											<div class="modal-dialog">
												<div class="modal-content">
													<form action="{{url('admin/store-dbmasyarakat')}}" method="post">
													@csrf
													<div class="modal-close-area modal-close-df">
														<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
													</div>
													<div class="modal-body">
														<table width="100%">
															<tr>
																<td>Judul</td>
															</tr>
															<tr>
																<td><input type="text" name="judul" class="form-control" placeholder="Judul Inovasi / Penelitian..." required></td>
															</tr>
															<tr>
																<td>Tahun</td>
															</tr>
															<tr>
																<td><input type="text" name="tahun" class="form-control" placeholder="Tahun..." required></td>
															</tr>
															<tr>
																<td>Nama</td>
															</tr>
															<tr>
																<td><input type="text" name="nama" class="form-control" placeholder="Nama..." required></td>
															</tr>
															<tr>
																<td>Lokasi Kegiatan</td>
															</tr>
															<tr>
																<td><input type="text" name="lokasi" class="form-control" placeholder="Lokasi Kegiatan..." required></td>
															</tr>
															<tr>
																<td>Abstraksi / Profil Inovasi</td>
															</tr>
															<tr>
																<td>
																<textarea  name="abstraksi" class="form-control" cols="60" rows="10" placeholder="Abstraksi..." required></textarea>
																</td>
															</tr>
															<tr>
																<td>Kategori</td>
															</tr>
															<tr>
																<td>
																<select name="kategori" class="form-control" id="">
																	<option value="0">Inovasi</option>
																	<option value="1">Penelitian</option>
																</select>
																</td>
															</tr>
														</table>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
														<button type="submit" name="simpan" class="btn btn-custon-four btn-primary btn-md"><i class="fa fa-save"></i> Save</button>
													</div>
													</form>
												</div>
											</div>
										</div>
                                    	<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
	                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    		<thead>
							                    <tr>
							                        <th data-field="id">No.</th>
							                        <th data-field="name">Judul</th>
													<th data-field="thn">Tahun</th>
							                        <th data-field="opd">Nama Peserta</th>
							                        <th data-field="location">Lokasi Kegiatan</th>
							                        <th data-field="abstraksi">Abstraksi</th>
													<th data-field="category">Kategori</th>
							                        <th data-field="action">Aksi</th>
							                    </tr>
							                </thead>
							                <tbody>
                                            @php 
												$no = 1;
											@endphp
												@forelse($dbmasyarakat as $data)
								                <tr>
								                						                    
	                                    			<td style="width: 5px;">{{$no++}}</td>
	                                    			<td>{{$data->judul}}</td>
	                                    			<td>{{$data->tahun}}</td>
	                                    			<td>{{$data->nama}}</td>
	                                    			<td>{{$data->lokasi}}</td>
													<td>{{substr($data->abstraksi, 0, 100)}}...</td>
	                                    			<td>
														@if($data->kategori === 0)
														<label class="label label-success">Inovasi</label>
														@elseif($data->kategori === 1)
														<label class="label label-warning">Penelitian</label>
														@endif
													</td>
													<td>
													<button type="button" class="btn btn-custon-four btn-primary btn-xs" data-toggle="modal" data-target="#PrimaryModalalert{{$data->id}}"><i class="fa fa-pencil"></i></button>
													<div id="PrimaryModalalert{{$data->id}}" class="modal modal-xl  fade" role="dialog">
														<div class="modal-dialog">
															<div class="modal-content">
																<form action="{{url('admin/update-dbmasyarakat/'.$data->id)}}"  method="post" enctype="multipart/form-data">
																	<input type="hidden" name="_method" value="PUT">
																	@csrf
																<div class="modal-close-area modal-close-df">
																	<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
																</div>
																<div class="modal-body">
																<table width="100%">
															<tr>
																<td>Judul</td>
															</tr>
															<tr>
																<td><input type="text" name="judul" value="{{$data->judul}}" class="form-control" placeholder="Judul Inovasi / Penelitian..." required></td>
															</tr>
															<tr>
																<td>Tahun</td>
															</tr>
															<tr>
																<td><input type="text" name="tahun" value="{{$data->tahun}}" class="form-control" placeholder="Tahun..." required></td>
															</tr>
															<tr>
																<td>Nama</td>
															</tr>
															<tr>
																<td><input type="text" name="nama" value="{{$data->nama}}" class="form-control" placeholder="Nama Peserta..." required></td>
															</tr>
															<tr>
																<td>Lokasi Kegiatan</td>
															</tr>
															<tr>
																<td><input type="text" name="lokasi" value="{{$data->lokasi}}" class="form-control" placeholder="Lokasi Kegiatan..." required></td>
															</tr>
															<tr>
																<td>Abstraksi / Profil Inovasi</td>
															</tr>
															<tr>
																<td>
																<textarea  name="abstraksi" class="form-control" cols="60" rows="10" placeholder="Abstraksi..." required>{{$data->abstraksi}}</textarea>
																</td>
															</tr>
															<tr>
																<td>Kategori</td>
															</tr>
															<tr>
																<td>
																<select name="kategori" class="form-control" id="">
																@if($data->kategori === 0)
																	<option value="0" selected>Inovasi</option>
																	<option value="1">Penelitian</option>
																@elseif($data->kategori === 1)
																	<option value="0">Inovasi</option>
																	<option value="1" selected>Penelitian</option>
																@endif
																</select>
																</td>
															</tr>
														</table>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
																	<button type="submit" name="edit" class="btn btn-custon-four btn-primary btn-md"><i class="fa fa-pencil"></i> Edit</button>
																</div>
																</form>
															</div>
														</div>
													</div>

													<button type="button" class="btn btn-custon-four btn-danger btn-xs" data-toggle="modal" data-target="#DangerModalalert{{$data->id}}"><i class="fa fa-trash"></i></button>
													<div id="DangerModalalert{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
														<div class="modal-dialog">
															<div class="modal-content">
																<form action="{{url('admin/delete-dbmasyarakat/'.$data->id)}}" method="post">
																	<input type="hidden" name="_method" value="DELETE">
																	@csrf
																<div class="modal-close-area modal-close-df">
																	<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
																</div>
																<div class="modal-body">
																	<input type="hidden" name="id" class="form-control" value="{{$data->id}}">
																	<p>Yakin akan menghapus {{$data->judul}}?</p>
																</div>
																<div class="modal-footer danger-md">
																	<button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
																	<button type="submit" name="del" class="btn btn-custon-four btn-danger btn-md"><i class="fa fa-trash"></i> Delete</button>
																</div>
																</form>
															</div>
														</div>
													</div>
													</td>	
	                                    		</tr> 
												@empty
												<tr>
												<td colspan="7"><center>Data Tidak Ada</center></td>
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
<!-- @section('custom_scripts')
<script type="text/javascript">
  var konten = document.getElementById("abstraksi");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>
@endsection -->