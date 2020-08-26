@extends('admin::layouts.app')

@section('htmlheader_title')
Inspirasi Sida | Admin
@endsection
@section('main-content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h4>List Pengumuman</h4>
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
                            	<form action="{{url('admin/storeProsedur')}}" method="post" enctype="multipart/form-data">
                                @csrf
								<div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                                <div class="modal-body">
                                	<table width="100%">
                                		<tr>
                                			<td>Judul Pengumuman</td>
                                		</tr>
                                		<tr>
                                			<td><input type="text" name="judul_prosedur" class="form-control" placeholder="Judul pengumuman..." required></td>
                                		</tr>
                                		<tr>
                                			<td>Narasi</td>
                                		</tr>
                                		<tr>
                                			<td>
                                				<!-- <div id="summernote2" name="narasi">
                                				</div> -->
				                            <textarea id="konten" class="form-control"  name="narasi" cols="60" rows="10" placeholder="Narasi pengumuman..." required></textarea>
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
                                                            <input type="file" name="berkas" required onchange="document.getElementById('prepend-small-btn2').value = this.value;">
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
	                        <th data-field="name">Judul Pengumuman</th>
	                        <th data-field="email" width="30%">Narasi</th>
	                        <th data-field="phone">Tanggal Dibuat</th>
	                        <th data-field="action">Aksi</th>
	                    </tr>
	                </thead>
	                <tbody>
					@php
						$no = 1;
					@endphp
						@foreach($prosedur as $data)
	                    <tr>
	                    			<td>{{$no++}}</td>
	                    			<td>{{$data->judul_prosedur}}</td>
	                    			<td width="30%">{{substr($data->narasi, 0, 100)}}...</td>
	                    			<td>{{$data->created_at}}</td>
	                    			<td>
	                    				<button type="button" class="btn btn-custon-four btn-primary btn-xs" data-toggle="modal" data-target="#PrimaryModalalert{{$data->id}}"><i class="fa fa-pencil"></i></button>
	                    				<div id="PrimaryModalalert{{$data->id}}" class="modal modal-xl  fade" role="dialog">
				                            <div class="modal-dialog">
				                                <div class="modal-content">
				                                    <form action="{{url('admin/update-prosedur/'.$data->id)}}"  method="post" enctype="multipart/form-data">
			                                    		<input type="hidden" name="_method" value="PUT">
														@csrf
													<div class="modal-close-area modal-close-df">
				                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
				                                    </div>
				                                    <div class="modal-body">
				                                    	<table>
				                                    		<tr>
				                                    			<td>Judul Pengumuman</td>
				                                    		</tr>
				                                    		<tr>
				                                    			<td>
				                                    				<input type="hidden" name="id" class="form-control" value="{{$data->id}}">
				                                    				<input type="text" name="judul_prosedur" class="form-control" value="{{$data->judul_prosedur}}" autofocus required>
				                                    			</td>
				                                    		</tr>
				                                    		<tr>
				                                    			<td>Narasi</td>
				                                    		</tr>
				                                    		<tr>
				                                    			<td>
				                                    				<textarea id="konten" class="form-control"  name="narasi" cols="60" rows="10" placeholder="Narasi pengumuman..." required>{{$data->narasi}}</textarea>
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
					                                                        <input type="text" name="berkas" id="prepend-small-btn" value="{{$data->berkas}}" required placeholder="no file selected">
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
				                                	<form action="{{url('admin/delete-prosedur/'.$data->id)}}" method="post">
														<input type="hidden" name="_method" value="DELETE">
				                                    	@csrf
													<div class="modal-close-area modal-close-df">
				                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
				                                    </div>
				                                    <div class="modal-body">
				                                        <input type="hidden" name="id" class="form-control" value="{{$data->id}}">
				                                        <p>Yakin akan menghapus data unit kerja {{$data->judul_prosedur}}?</p>
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
	                    @endforeach
	                </tbody>
	            </table>
	        </div>
	    </div>
    </div>
</div>
@endsection
@section('custom_scripts')
<!-- <script type="text/javascript">
  var konten = document.getElementById("konten");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script> -->
@endsection