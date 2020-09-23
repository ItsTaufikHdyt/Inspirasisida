@extends('admin::layouts.app')

@section('htmlheader_title')
    Inspirasi Sida | Admin
@endsection
@section('main-content')
<!--- Alert Modal -->
@if ($errors->any())      
<div class="modal fade" id="poster" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header" style="background-color: #f65656;">
			<font class="modal-title" id="exampleModalLongTitle" style="color: #ffffff; font-size: 30px; font-family: Arial Black;">Oops, Error Register</font>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<center>
				<img src="{{asset('img/icon/danger-alert.svg')}}" width="200" height="200">
			</center>
				<ul>
				@foreach ($errors->all() as $error)
					<li><font style="font-size: 18px;font-family: Comic Sans MS;">{{ $error }}</font></li>
				@endforeach
				</ul>
			</div>
			</div>
		</div>
</div>
@endif
    <!--- End Alert Modal -->
<h4>List User</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    <div class="sparkline13-graph">
	        <div class="datatable-dashv1-list custom-datatable-overright">
            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
	                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
	                <thead>
	                    <tr>
	                        <th data-field="id">No.</th>
	                        <th data-field="name">Nama</th>
	                        <th data-field="email" >Email</th>
	                        <th data-field="status">Status</th>
							<th data-field="aksi">Aksi</th>
	                    </tr>
	                </thead>
	                <tbody>
					@php
						$no = 1;
					@endphp
						@forelse($user as $data)
	                    <tr>
	                    			<td>{{$no++}}</td>
	                    			<td>{{$data->nama}}</td>
                                    <td>{{$data->email}}</td>
	                    			<td>
										@if($data->email_verified === 0 )
                                    		<span class="label label-danger">
											 Tidak Aktif
											</span>
										@else
										<span class="label label-success">
											 Aktif
										</span>
										@endif
                                    </td>
									<td>
									<button type="button" class="btn  btn-warning btn-xs" data-toggle="modal" data-target="#DangerModalalert{{$data->id}}"><i class="fa fa-pencil"></i></button>
	                    				<div id="DangerModalalert{{$data->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
				                            <div class="modal-dialog">
				                                <div class="modal-content">
				                                	<form action="{{url('admin/activated/'.$data->id)}}" method="post">
														<input type="hidden" name="_method" value="PUT">
				                                    	@csrf
													<div class="modal-close-area modal-close-df">
				                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
				                                    </div>
				                                    <div class="modal-body">
				                                        <select name="activated" class="form-control" id="">
															@if($data->email_verified === 0)
															<option value="0" selected>Tidak Aktif</option>
															<option value="1">Aktif</option>
															@else
															<option value="0">Tidak Aktif</option>
															<option value="1" selected>Aktif</option>
															@endif
														</select>
				                                    </div>
				                                    <div class="modal-footer danger-md">
				                                        <button type="button" class="btn btn-custon-four btn-default btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                                    					<button type="submit" name="del" class="btn btn-custon-four btn-primary btn-md"><i class="fa fa-check"></i> Simpan </button>
				                                    </div>
				                                	</form>
				                                </div>
				                            </div>
				                        </div>
									</td>
	                    		</tr>
						@empty
						<tr>
						<td colsapan="5"><center>Tidak Ada Data</center></td>
						</tr>
	                    @endforelse
	                </tbody>
	            </table>
	        </div>
	    </div>
    </div>
</div>
@endsection
