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
<h4>List Perangkat Daerah</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    <div class="sparkline13-graph">
	        <div class="datatable-dashv1-list custom-datatable-overright">
	          <div id="toolbar">
                <button type="button" class="btn btn-custon-four btn-primary" data-toggle="modal" data-target="#PrimaryModalalert">
					<i class="fa fa-plus-circle"></i> Input Data
				</button>
				<div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            	<form action="{{url('admin/store-data-opd')}}" method="post">
								@csrf
                                <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                                <div class="modal-body">
                                	<table width="100%">
                                		<tr>
                                			<td>Nama Unit Kerja</td>
                                		</tr>
                                		<tr>
                                			<td><input type="text" name="nama_uk" class="form-control" placeholder="Nama Unit Kerja" required></td>
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
	                        <th data-field="name">Unit Kerja</th>
	                        <th data-field="action">Aksi</th>
	                    </tr>
	                </thead>
	                <tbody>
					@php 
                		$no = 1;
                	@endphp
					@foreach($opd as $data)
	                    <tr>
	                    			<td>{{$no++}}</td>
	                    			<td>{{$data->nama_uk}}</td>
	                    			<td>
	                    				<button type="button" class="btn btn-custon-four btn-primary btn-xs" data-toggle="modal" data-target="#PrimaryModalalert{{$data->id}}"><i class="fa fa-pencil"></i></button>
	                    				<div id="PrimaryModalalert{{$data->id}}" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
				                            <div class="modal-dialog">
				                                <div class="modal-content">
				                                	<form action="{{url('admin/update-data-opd/'.$data->id)}}" method="post">
														<input type="hidden" name="_method" value="PUT">
            											@csrf
													<div class="modal-close-area modal-close-df">
				                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
				                                    </div>
				                                    <div class="modal-body">
				                                    	<table>
				                                    		<tr>
				                                    			<td>Nama Unit Kerja</td>
				                                    		</tr>
				                                    		<tr>
				                                    			<td><input type="hidden" name="id" class="form-control" value="{{$data->id}}" required>
				                                    				<input type="text" name="nama_uk" class="form-control" value="{{$data->nama_uk}}" required></td>
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
				                                	<form action="{{url('admin/delete-data-opd/'.$data->id)}}" method="post">
														<input type="hidden" name="_method" value="DELETE">
            											@csrf
													<div class="modal-close-area modal-close-df">
				                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
				                                    </div>
				                                    <div class="modal-body">
				                                        <input type="hidden" name="id" class="form-control" value="{{$data->id}}" required>
				                                        <p>Yakin akan menghapus data unit kerja {{$data->nama_uk}}?</p>
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
	                    <!-- </tr> -->
					@endforeach
	                </tbody>
	            </table>
	        </div>
	    </div>
    </div>
</div>
@endsection