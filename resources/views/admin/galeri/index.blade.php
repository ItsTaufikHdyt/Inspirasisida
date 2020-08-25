@extends('admin::layouts.app')

@section('htmlheader_title')
	Inspirasi Sida | Admin
@endsection
@section('main-content')
<h4>Galeri</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    <div class="sparkline13-graph">
	        <div class="datatable-dashv1-list custom-datatable-overright">
	            <div id="toolbar">
                    <button type="button" class="btn btn-custon-four btn-primary" data-toggle="modal" data-target="#PrimaryModalalert">
						<i class="fa fa-plus-circle"></i> Input Data
					</button>
					<div id="PrimaryModalalert" class="modal modal-xl  fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            	<form action="{{url('admin/store-galeri')}}" method="post" enctype="multipart/form-data">
                                @csrf
								<div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                                <div class="modal-body">
                                	<table width="100%">
                                		<tr>
                                			<td>kategori</td>
                                		</tr>
                                		<tr>
                                			<td>
												<select name="kategori" class="form-control" id="">
													<option value="0">Foto</option>
													<option value="1">Poster</option>
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
                                                            <input type="file" name="foto" required onchange="document.getElementById('prepend-small-btn2').value = this.value;">
                                                        </div>
                                                        <input type="text" name="file" id="prepend-small-btn2" placeholder="no file selected" required>
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
                </div>
                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
	                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
	                <thead>
	                    <tr>
	                        <th data-field="id">No.</th>
	                        <th data-field="name">Foto</th>
	                        <th data-field="email" width="30%">Kategori</th>
	                        <th data-field="action">Aksi</th>
	                    </tr>
	                </thead>
	                <tbody>
					@php
						$no = 1;
					@endphp
						@forelse($galeri as $data)
	                    <tr>
	                    			<td>{{$no++}}</td>
	                    			<td><img src="{{url('storage/galeri/'.$data->foto)}}" width="300" height="300"></td>
	                    			<td>@if($data->kategori === 0)
											<span class="label label-success">Foto</span>	
										@else
										<span class="label label-warning">Poster</span>
										@endif
									</td>
	                    			<td>
	                    				<button type="button" class="btn btn-custon-four btn-danger btn-xs" data-toggle="modal" data-target="#DangerModalalert{{$data->id}}"><i class="fa fa-trash"></i></button>
	                    				<div id="DangerModalalert{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
				                            <div class="modal-dialog">
				                                <div class="modal-content">
				                                	<form action="{{url('admin/delete-galeri/'.$data->id)}}" method="post">
														<input type="hidden" name="_method" value="DELETE">
				                                    	@csrf
													<div class="modal-close-area modal-close-df">
				                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
				                                    </div>
				                                    <div class="modal-body">
				                                        <input type="hidden" name="id" class="form-control" value="{{$data->id}}">
				                                        <p>Yakin akan menghapus Foto Ini?</p>
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
								<td colspan="4"><center>Data Tidak Ada</center></td>
							</tr>
						@endforelse
	                </tbody>
	            </table>
	        </div>
	    </div>
    </div>
</div>
@endsection