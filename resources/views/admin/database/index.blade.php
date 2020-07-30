@extends('admin::layouts.app')

@section('htmlheader_title')
	eLitbang | Admin
@endsection
@section('main-content')
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
													<form action="#" method="post">
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
																<td>Abstraksi / Profil Inovasi</td>
															</tr>
															<tr>
																<td>
																	<!-- <div id="summernote2" name="narasi">
																	</div> -->
																<textarea id="abstraksi"  name="narasi" cols="60" rows="10" placeholder="Abstraksi..." required></textarea>
																</td>
															</tr>
															<tr>
																<td>Kategori</td>
															</tr>
															<tr>
																<td>
																<select name="kategori" class="form-control" id="">
																	<option value="inovasi">Inovasi</option>
																	<option value="penelitian">Penelitian</option>
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
							                        <th data-field="opd">Perangkat Daerah</th>
							                        <th data-field="location">Lokasi Kegiatan</th>
													<th data-field="abstraksi">Abstraksi/Profil Inovasi</th>
													<th data-field="category">Kategori</th>
							                        <th data-field="action">Aksi</th>
							                    </tr>
							                </thead>
							                <tbody>
                                            
								                <tr>
								                						                    
	                                    			<td style="width: 5px;"></td>
	                                    			<td></td>
	                                    			<td></td>
	                                    			<td></td>
													<td></td>
	                                    			<td></td>
													<td></td>
	                                    			
	                                    		</tr>                                               
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
											<button type="button" class="btn btn-custon-four btn-primary" data-toggle="modal" data-target="#PrimaryModalalert">
												<i class="fa fa-plus-circle"></i> Input Data
											</button>
										</div>
                                    	<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
	                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    		<thead>
							                    <tr>
							                        <th data-field="id">No.</th>
							                        <th data-field="name">Judul</th>
							                        <th data-field="opd">Nama Peserta</th>
							                        <th data-field="location">Lokasi Kegiatan</th>
													<th data-field="abstraksi">Kriteria Peserta</th>
							                        <th data-field="thn">Kategori</th>
							                        <th data-field="action">Aksi</th>
							                    </tr>
							                </thead>
							                <tbody>
                                            
								                <tr>
								                						                    
	                                    			<td style="width: 5px;"></td>
	                                    			<td></td>
	                                    			<td></td>
	                                    			<td></td>
													<td></td>
	                                    			<td></td>
													<td></td>
	                                    			
	                                    		</tr>                                               
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
@section('custom_scripts')
<script type="text/javascript">
  var konten = document.getElementById("abstraksi");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>
@endsection