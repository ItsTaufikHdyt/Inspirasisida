@extends('admin::layouts.app')

@section('htmlheader_title')
	eLitbang | Admin
@endsection
@section('main-content')
<h4>List Pengumuman</h4>
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
                            	<form method="post" enctype="multipart/form-data">
                                <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                                <div class="modal-body">
                                	<table width="100%">
                                		<tr>
                                			<td>Judul Pengumuman</td>
                                		</tr>
                                		<tr>
                                			<td><input type="text" name="judul" class="form-control" placeholder="Narasi pengumuman..." required></td>
                                		</tr>
                                		<tr>
                                			<td>Narasi</td>
                                		</tr>
                                		<tr>
                                			<td>
                                				<!-- <div id="summernote2" name="narasi">
                                				</div> -->
				                            <textarea name="narasi" cols="60" rows="10" placeholder="Narasi pengumuman..." required></textarea>
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
                                                            <input type="file" name="file" required onchange="document.getElementById('prepend-small-btn2').value = this.value;">
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
                   @forelse($prosedur as $data)
	                    <tr>
	                    			<td>{{$no++}}</td>
	                    			<td>{{$data->judul_prosedur}}</td>
	                    			<td width="30%">{{substr($data->narasi, 0, 100)}}...</td>
	                    			<td>{{data->created_at}}</td>
	                    			<td>
	                    				<button type="button" class="btn btn-custon-four btn-primary btn-xs" data-toggle="modal" data-target="#PrimaryModalalert{{$data->id}}"><i class="fa fa-pencil"></i></button>
	                    				<div id="PrimaryModalalert{{$data->id}}" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
				                            <div class="modal-dialog">
				                                <div class="modal-content">
				                                    <form method="post" enctype="multipart/form-data">
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
				                                    				<input type="text" name="judul" class="form-control" value="<?php echo $row['judul_prosedur']; ?>" autofocus required>
				                                    			</td>
				                                    		</tr>
				                                    		<tr>
				                                    			<td>Narasi</td>
				                                    		</tr>
				                                    		<tr>
				                                    			<td>
				                                    				<textarea name="narasi" cols="60" rows="10" placeholder="Narasi pengumuman..." required><?php echo $row['narasi']; ?></textarea>
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
					                                                            <input type="file" name="file" onchange="document.getElementById('prepend-small-btn').value = this.value;">
					                                                        </div>
					                                                        <input type="text" name="file" id="prepend-small-btn" value="<?php echo $row['berkas']; ?>" required placeholder="no file selected">
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
				                                	<form method="post">
				                                    <div class="modal-close-area modal-close-df">
				                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
				                                    </div>
				                                    <div class="modal-body">
				                                        <input type="hidden" name="id" class="form-control" value="{{$data->id}}">
				                                        <p>Yakin akan menghapus data unit kerja <?php echo $row['judul_prosedur']; ?>?</p>
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
                            <td colspan="5" align="center">Data Tidak Ada</td>
                        </tr>
	                @endforelse
	                </tbody>
	            </table>
	        </div>
	    </div>
    </div>
</div>
@endsection