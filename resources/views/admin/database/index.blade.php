@extends('admin::layouts.app')

@section('htmlheader_title')
Inspirasi Sida | Admin
@endsection
@section('main-content')
<!--- Alert Modal -->
@if ($errors->any())
<div class="modal fade" id="alert-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
					<li>
						<font style="font-size: 18px;font-family: Comic Sans MS;">{{ $error }}</font>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
@endif
<!--- End Alert Modal -->
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
																		<textarea name="abstraksi" class="form-control" cols="60" rows="10" placeholder="Abstraksi..." required></textarea>
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
										<br><br><br>
										<table id="tabel-opd" class="table table-bordered table-hover table-responsive" style="width: 100%;">
											<thead>
												<tr>
													<th>No.</th>
													<th>Judul</th>
													<th>Tahun</th>
													<th>Perangkat Daerah</th>
													<th>Lokasi Kegiatan</th>
													<th>Abstraksi/Profil Inovasi</th>
													<th>Berkas</th>
													<th>Kategori</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
										<div class="modal modal-xl  fade" role="dialog" id="dbopd_modal">
											<div class="modal-dialog">
												<form id="companydata">
													<div class="modal-content">
														<input type="hidden" id="dbopd_id" name="dbopd_id" value="">
														<div class="modal-close-area modal-close-df">
															<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
														</div>
														<div class="modal-body">
															<table width="100%">
																<tr>
																	<td>Judul</td>
																</tr>
																<tr>
																	<td><input type="text" id="judul" name="judul" value="" class="form-control" placeholder="Judul Inovasi / Penelitian..." required></td>
																</tr>
																<tr>
																	<td>Tahun</td>
																</tr>
																<tr>
																	<td><input type="text" id="tahun" name="tahun" value="" class="form-control" placeholder="Tahun..." required></td>
																</tr>
																<tr>
																	<td>OPD</td>
																</tr>
																<tr>
																	<td><input type="text" id="opd" name="opd" value="" class="form-control" placeholder="Nama Peserta..." required></td>
																</tr>
																<tr>
																	<td>Lokasi Kegiatan</td>
																</tr>
																<tr>
																	<td><input type="text" id="lokasi" name="lokasi" value="" class="form-control" placeholder="Lokasi Kegiatan..." required></td>
																</tr>
																<tr>
																	<td>Abstraksi / Profil Inovasi</td>
																</tr>
																<tr>
																	<td>
																		<textarea id="abstraksi" name="abstraksi" class="form-control" cols="60" rows="10" placeholder="Abstraksi..." required></textarea>
																	</td>
																</tr>
																<tr>
																	<td>Kategori</td>
																</tr>
																<tr>
																	<td>
																		<select name="kategori" class="form-control" id="kategori">
																			<option value="0">Inovasi</option>
																			<option value="1">Penelitian</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>Upload Berkas</td>
																</tr>
																<tr>
																	<td>
																		<div class="file-upload-inner ts-forms">
																			<div class="input prepend-small-btn">
																				<div class="file-button">
																					Browse
																					<input type="file" id="berkas" name="berkas" onchange="document.getElementById('prepend-small-btn5').value = this.value;">
																				</div>
																				<input type="text" name="file" id="prepend-small-btn5" value="" placeholder="no file selected">
																			</div>
																		</div>
																	</td>
																</tr>
															</table>
														</div>
														<div class="modal-footer">
															<input type="submit" value="Submit" id="submit-edit-opd" class="btn btn-custon-four btn-primary btn-md">
														</div>
													</div>
												</form>
											</div>
										</div>
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
																	<td><input id="judul" type="text" name="judul" class="form-control" placeholder="Judul Inovasi / Penelitian..." required></td>
																</tr>
																<tr>
																	<td>Tahun</td>
																</tr>
																<tr>
																	<td><input id="" type="text" name="tahun" class="form-control" placeholder="Tahun..." required></td>
																</tr>
																<tr>
																	<td>OPD</td>
																</tr>
																<tr>
																	<td><input type="text" name="opd" class="form-control" placeholder="Nama..." required></td>
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
																		<textarea name="abstraksi" class="form-control" cols="60" rows="10" placeholder="Abstraksi..." required></textarea>
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
										<br><br><br>
										<table id="tabel-masyarakat" class="table table-bordered table-hover table-responsive" style="width: 100%;">
											<thead>
												<tr>
													<th>No.</th>
													<th>Judul</th>
													<th>Tahun</th>
													<th>Nama Peserta</th>
													<th>Lokasi Kegiatan</th>
													<th>Abstraksi</th>
													<th>Kategori</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
										<div class="modal modal-xl  fade" role="dialog" id="dbmasyarakat_modal">
											<div class="modal-dialog">
												<form id="companydata">
													<div class="modal-content">
														<input type="hidden" id="dbmasyarakat_id" name="dbmasyarakat_id" value="">
														<div class="modal-close-area modal-close-df">
															<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
														</div>
														<div class="modal-body">
															<table width="100%">
																<tr>
																	<td>Judul</td>
																</tr>
																<tr>
																	<td><input type="text" id="judul-dbmasyarakat" name="judul" value="" class="form-control" placeholder="Judul Inovasi / Penelitian..." required></td>
																</tr>
																<tr>
																	<td>Tahun</td>
																</tr>
																<tr>
																	<td><input type="text" id="tahun-dbmasyarakat" name="tahun" value="" class="form-control" placeholder="Tahun..." required></td>
																</tr>
																<tr>
																	<td>Nama</td>
																</tr>
																<tr>
																	<td><input type="text" id="nama-dbmasyarakat" name="nama" value="" class="form-control" placeholder="Nama Peserta..." required></td>
																</tr>
																<tr>
																	<td>Lokasi Kegiatan</td>
																</tr>
																<tr>
																	<td><input type="text" id="lokasi-dbmasyarakat" name="lokasi" value="" class="form-control" placeholder="Lokasi Kegiatan..." required></td>
																</tr>
																<tr>
																	<td>Abstraksi / Profil Inovasi</td>
																</tr>
																<tr>
																	<td>
																		<textarea id="abstraksi-dbmasyarakat" name="abstraksi" class="form-control" cols="60" rows="10" placeholder="Abstraksi..." required></textarea>
																	</td>
																</tr>
																<tr>
																	<td>Kategori</td>
																</tr>
																<tr>
																	<td>
																		<select name="kategori" class="form-control" id="kategori-dbmasyarakat">
																			<option value="0">Inovasi</option>
																			<option value="1">Penelitian</option>
																		</select>
																	</td>
																</tr>
															</table>
														</div>
														<div class="modal-footer">
															<input type="submit" value="Submit" id="submit-edit-masyarakat" class="btn btn-custon-four btn-primary btn-md">
														</div>
													</div>
												</form>
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
</div>
@endsection
@section('custom_scripts')
<script type="text/javascript">
	$('#alert-modal').modal('show');
	//Database Masyarakat
	//--------------Fungsi Yajra DataTables------------
	$(function() {
		var table = $('#tabel-masyarakat').DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: "{{ route('admin.databaseMasyarakat') }}",
			columns: [{
					data: 'DT_RowIndex',
					name: 'DT_RowIndex',
					orderable: false,
					searchable: false
				},
				{
					data: 'judul',
					name: 'judul',
				},
				{
					data: 'tahun',
					name: 'tahun',
				},
				{
					data: 'nama',
					name: 'nama',
				},
				{
					data: 'lokasi',
					name: 'lokasi',
				},
				{
					data: 'abstraksi',
					name: 'abstraksi',
				},
				{
					data: 'kategori',
					name: 'kategori',
				},
				{
					data: 'action',
					name: 'action',
					orderable: false,
					searchable: false
				},
			],
			columnDefs: [{
				targets: 5,
				function(data, type, row) {
					return data.substr(0, 50);
				}
			}]
		});

	});

	//--------------Fungsi Edit & Update ------------
	$(document).ready(function() {

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('body').on('click', '#editDbMasyarakat', function(event) {

			event.preventDefault();
			var id = $(this).data('id');
			console.log(id)
			$.get('{{url("admin/edit-dbmasyarakat")}}' + '/' + id, function(data) {
				console.log(data);
				$('#userCrudModal').html("Database Masyarakat");
				$('#submit-edit').val("Database Masyarakat");
				$('#dbmasyarakat_modal').modal('show');
				$('#dbmasyarakat_id').val(data.data.id);
				$('#judul-dbmasyarakat').val(data.data.judul);
				$('#tahun-dbmasyarakat').val(data.data.tahun);
				$('#nama-dbmasyarakat').val(data.data.nama);
				$('#lokasi-dbmasyarakat').val(data.data.lokasi);
				$('#abstraksi-dbmasyarakat').val(data.data.abstraksi);
				$('#kategori-dbmasyarakat').val(data.data.kategori);
			})
		});


		$('body').on('click', '#submit-edit-masyarakat', function(event) {
			event.preventDefault()
			var id = $("#dbmasyarakat_id").val();
			var tahun = $("#tahun-dbmasyarakat").val();
			var judul = $("#judul-dbmasyarakat").val();
			var nama = $("#nama-dbmasyarakat").val();
			var lokasi = $("#lokasi-dbmasyarakat").val();
			var abstraksi = $("#abstraksi-dbmasyarakat").val();
			var kategori = $("#kategori-dbmasyarakat").val();
			var token = '{{ csrf_token() }}';

			$.ajax({
				url: '{{url("admin/update-dbmasyarakat/")}}' + '/' + id,
				type: "PUT",
				data: {
					id: id,
					tahun: tahun,
					judul: judul,
					nama: nama,
					lokasi: lokasi,
					abstraksi: abstraksi,
					kategori: kategori,
					'_token': token
				},
				dataType: 'json',
				success: function(data) {

					$('#opddata').trigger("reset");
					$('#databasemasyarakat_modal').modal('hide');
					window.location.reload(true);
				}
			});
		});
	});

	//--------------Fungsi Delete ------------
	function deleteItemMasyarakat(e) {

		let id = e.getAttribute('data-id');
		let token = '{{ csrf_token() }}';

		Swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Yes, delete it!',
			cancelButtonText: 'No, cancel!',
			reverseButtons: true
		}).then((result) => {
			if (result.value) {
				if (result.isConfirmed) {

					$.ajax({
						type: "DELETE",
						url: '{{ url("admin/delete-dbmasyarakat")}}' + '/' + id,
						data: {
							id: id,
							'_token': token
						},
						success: function(data) {
							if (data.success) {
								Swal.fire(
									'Deleted!',
									'Your file has been deleted.',
									"success"
								);
								$("#" + id + "").remove();
								window.location.reload(true); // you can add name div to remove
							}

						}
					});

				}

			} else if (
				result.dismiss === Swal.DismissReason.cancel
			) {
				Swal.fire(
					'Cancelled',
					'Your imaginary file is safe :)',
					'error'
				);
			}
		});

	}

	//Database OPD
	//--------------Fungsi Yajra DataTables------------
	$(function() {
		var table = $('#tabel-opd').DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: "{{ route('admin.databaseOpd') }}",
			columns: [{
					data: 'DT_RowIndex',
					name: 'DT_RowIndex',
					orderable: false,
					searchable: false
				},
				{
					data: 'judul',
					name: 'judul',
				},
				{
					data: 'tahun',
					name: 'tahun',
				},
				{
					data: 'opd',
					name: 'opd',
				},
				{
					data: 'lokasi',
					name: 'lokasi',
				},
				{
					data: 'abstraksi',
					name: 'abstraksi',
				},
				{
					data: 'berkas',
					name: 'berkas',
				},
				{
					data: 'kategori',
					name: 'kategori',
				},
				{
					data: 'action',
					name: 'action',
					orderable: false,
					searchable: false
				},
			],
			columnDefs: [{
				targets: 5,
				function(data, type, row) {
					return data.substr(0, 50);
				}
			}]
		});

	});

	//--------------Fungsi Edit & Update ------------
	$(document).ready(function() {

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('body').on('click', '#editDbOpd', function(event) {

			event.preventDefault();
			var id = $(this).data('id');
			console.log(id)
			$.get('{{url("admin/edit-dbopd")}}' + '/' + id, function(data) {
				console.log(data);
				$('#userCrudModal').html("Database Opd");
				$('#submit-edit').val("Database Opd");
				$('#dbopd_modal').modal('show');
				$('#dbopd_id').val(data.data.id);
				$('#judul').val(data.data.judul);
				$('#tahun').val(data.data.tahun);
				$('#opd').val(data.data.opd);
				$('#lokasi').val(data.data.lokasi);
				$('#abstraksi').val(data.data.abstraksi);
				$('#kategori').val(data.data.kategori);
			})
		});


		$('body').on('click', '#submit-edit-opd', function(event) {
			event.preventDefault();
			var formData = new FormData();
			var id = $("#dbopd_id").val();
			// var judul = $("#judul").val();
			// var tahun = $("#tahun").val();
			// var opd = $("#opd").val();
			// var lokasi = $("#lokasi").val();
			// var abstraksi = $("#abstraksi").val();
			// var kategori = $("#kategori").val();
			// var token = '{{ csrf_token() }}';

			// {
			// 		id: id,
			// 		tahun: tahun,
			// 		judul: judul,
			// 		nama: nama,
			// 		lokasi: lokasi,
			// 		abstraksi: abstraksi,
			// 		kategori: kategori,
			// 		'_token': token
			// 	}

			$.ajax({
				url: '{{url("admin/update-dbopd/")}}' + '/' + id,
				type: "PUT",
				processData: false,
				contentType: false,
				data: formData,
				dataType: 'json',
				success: function(data) {

					$('#opddata').trigger("reset");
					$('#databasemasyarakat_modal').modal('hide');
					window.location.reload(true);
				}
			});
		});
	});

	//--------------Fungsi Delete ------------
	function deleteItemOpd(e) {

		let id = e.getAttribute('data-id');
		let token = '{{ csrf_token() }}';

		Swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Yes, delete it!',
			cancelButtonText: 'No, cancel!',
			reverseButtons: true
		}).then((result) => {
			if (result.value) {
				if (result.isConfirmed) {

					$.ajax({
						type: "DELETE",
						url: '{{ url("admin/delete-dbopd")}}' + '/' + id,
						data: {
							id: id,
							'_token': token
						},
						success: function(data) {
							if (data.success) {
								Swal.fire(
									'Deleted!',
									'Your file has been deleted.',
									"success"
								);
								$("#" + id + "").remove();
								window.location.reload(true); // you can add name div to remove
							}

						}
					});

				}

			} else if (
				result.dismiss === Swal.DismissReason.cancel
			) {
				Swal.fire(
					'Cancelled',
					'Your imaginary file is safe :)',
					'error'
				);
			}
		});

	}
</script>
@endsection