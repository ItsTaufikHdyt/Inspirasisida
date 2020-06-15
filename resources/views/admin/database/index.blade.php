@extends('admin::layouts.app')

@section('htmlheader_title')
	eLitbang | Admin
@endsection
@section('main-content')
<h4>Database Penelitian dan Inovasi</h4>
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
                                		<tr>
                                			<td>Deskripsi Berkas</td>
                                		</tr>
                                		<tr>
                                			<td>
                                				<input type="text" class="form-control" name="judul" required>
                                			</td>
                                		</tr>
                                		<tr>
                                			<td>Kategori Berkas</td>
                                		</tr>
                                		<tr>
                                			<td>
                                				<select class="form-control custom-select-value" name="kategori" required>
                                					<option>-Pilih Kategori-</option>
                                					<option value="Inovasi">Inovasi</option>
                                					<option value="Penelitian">Penelitian</option>
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
                </div>
                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
	                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
	                <thead>
	                    <tr>
	                        <th data-field="id">No.</th>
	                        <th data-field="name">Tanggal Upload</th>
	                        <th data-field="berkas" width="30%">Nama Berkas</th>
	                        <th data-field="judul" width="30%">Deskripsi Berkas</th>
	                        <th data-field="kategori" width="30%">Kategori Berkas</th>
	                        <th data-field="action">Aksi</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    <tr>
	                    	<?php 
	                    		$no = 1;
	                    		$sql = $koneksi->query("SELECT * from data_berkas order by tgl_upload desc");
	                    		while($row = $sql->fetch_array()){
	                    	?>
	                    			<td><?php echo $no++; ?></td>
	                    			<td><?php echo $row['tgl_upload']; ?></td>
	                    			<td><?php echo $row['berkas_penelitian']; ?></td>
	                    			<td><?php echo $row['deskripsi_berkas']; ?></td>
	                    			<td><?php echo $row['kategori']; ?></td>
	                    			<td>
	                    				<button type="button" class="btn btn-custon-four btn-primary btn-xs" data-toggle="modal" data-target="#PrimaryModalalert<?php echo $row['id_db']; ?>"><i class="fa fa-pencil"></i></button>
	                    				<div id="PrimaryModalalert<?php echo $row['id_db']; ?>" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
				                            <div class="modal-dialog">
				                                <div class="modal-content">
				                                    <form method="post" enctype="multipart/form-data">
			                                    	<div class="modal-close-area modal-close-df">
				                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
				                                    </div>
				                                    <div class="modal-body">
				                                    	<table>
				                                    		<tr>
					                                			<td>Upload File</td>
					                                		</tr>
					                                		<tr>
					                                			<td>
					                                				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id_db']; ?>">
					                                				<div class="file-upload-inner ts-forms">
					                                                    <div class="input prepend-small-btn">
					                                                        <div class="file-button">
					                                                            Browse
					                                                            <input type="file" name="file" onchange="document.getElementById('prepend-small-btn').value = this.value;">
					                                                        </div>
					                                                        <input type="text" name="file" id="prepend-small-btn" value="<?php echo $row['berkas_penelitian']; ?>" required placeholder="no file selected">
					                                                    </div>
					                                                </div>
										                        </td>
					                                		</tr>
					                                		<tr>
					                                			<td>Deskripsi Berkas</td>
					                                		</tr>
					                                		<tr>
					                                			<td>
					                                				<input type="text" class="form-control" name="judul" value="<?php echo $row['deskripsi_berkas']; ?>" required>
					                                			</td>
					                                		</tr>
					                                		<tr>
					                                			<td>Kategori Berkas</td>
					                                		</tr>
					                                		<tr>
					                                			<td>
					                                				<select class="form-control custom-select-value" name="kategori" required>
					                                					<option>-Pilih Kategori-</option>
					                                					<option value="Inovasi" <?php echo $row['kategori'] == 'Inovasi'?'selected':'';?>>Inovasi</option>
					                                					<option value="Penelitian" <?php echo $row['kategori'] == 'Penelitian'?'selected':'';?>>Penelitian</option>
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

	                    				<button type="button" class="btn btn-custon-four btn-danger btn-xs" data-toggle="modal" data-target="#DangerModalalert<?php echo $row['id_db']; ?>"><i class="fa fa-trash"></i></button>
	                    				<div id="DangerModalalert<?php echo $row['id_db']; ?>" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
				                            <div class="modal-dialog">
				                                <div class="modal-content">
				                                	<form method="post">
				                                    <div class="modal-close-area modal-close-df">
				                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
				                                    </div>
				                                    <div class="modal-body">
				                                        <input type="hidden" name="id" class="form-control" value="<?php echo $row['id_db']; ?>">
				                                        <p>Yakin akan menghapus database <?php echo $row['berkas_penelitian']; ?>?</p>
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
	                    	<?php
	                    		}
	                    	?>
	                    <!-- </tr> -->
	                </tbody>
	            </table>
	        </div>
	    </div>
    </div>
</div>
@endsection